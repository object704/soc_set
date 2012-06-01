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

namespace Acme\UserBundle\Form\Type\Search;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class PeopleFormType extends AbstractType
{

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('firstName', null, array( 'label' => 'Имя: ', 'required' => false,))
            ->add('lastName', null, array( 'label' => 'Фамилия: ', 'required' => false,))
            ->add('spec', 'entity', array('class' => 'UserBundle:Spec',
                      'label' => 'Специальность: ',
                      'empty_value'=> 'Выберите специальность',
                         'required' => false,
        ) )


            ->add('group', 'shtumi_dependent_filtered_entity'
                 , array(
                     'entity_alias' => 'group_by_spec'
                 , 'label' => 'Группа: '
                 , 'empty_value'=> '== Выберите группу =='
                 , 'parent_field'=> 'spec',
                'required' => false
                 ))
        ;

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' =>  'Acme\UserBundle\Entity\Search\User',
            'csrf_protection' => false,
        );
    }

    public function getName()
    {
        return 'people';
    }
}
