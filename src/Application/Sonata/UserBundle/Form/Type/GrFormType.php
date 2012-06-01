<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * dited by Ostretsov Artem (http://ostretsov.ru)
 */

namespace Application\Sonata\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Application\Sonata\UserBundle\Form\Type\ProfileFormType;
use Application\Sonata\UserBundle\Entity\Grouppa;
use Application\Sonata\UserBundle\Entity\User;

class GrFormType extends AbstractType
{

    public function buildForm(FormBuilder $builder, array $options)
    {
       // if(is_object('spec'))
      //  {

            $builder
                ->add('spec', 'entity', array('class' => 'ApplicationSonataUserBundle:Spec',
                'label' => 'Специальность: ',
                'empty_value'=> 'Выберите специальность') )   ;
         //$repository = $this->getDoctrine()->getRepository('UserBundle:Grouppa');
        // $gro=$repository->findOneBygrName($gr->getGrName());
             $builder
                ->add('group', 'shtumi_dependent_filtered_entity'
                , array(
                      'entity_alias' => 'group_by_spec'
                    , 'label' => 'Группа: '
                    , 'empty_value'=> '== Выберите группу =='
                    , 'parent_field'=> 'spec'
                ))

            ;
     //   }
        // else
        //{
         //   $builder
         //      ->add('spec', 'entity', array('class' => 'UserBundle:Spec',
         //       'label' => 'Специальность: ',
         //      'empty_value'=> 'Выберите специальность') )
         //
         //       ->add('grName', null
                ///, array(
                //    'entity_alias' => 'group_by_spec'
                ///  , 'label' => 'Группа: '
                //  , 'empty_value'=> '== Выберите группу =='
                //  , 'parent_field'=> 'spec'
           //     )
          //  ;
        // }

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' =>  'Application\Sonata\UserBundle\Entity\Grouppa',
        );
    }

    public function getName()
    {
        return 'name_group';
    }
}
