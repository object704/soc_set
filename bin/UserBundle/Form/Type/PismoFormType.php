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

namespace Acme\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Acme\UserBundle\Entity\Msg;

class PismoFormType extends AbstractType
{

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('firstName', null, array( 'label' => 'Имя: '))
            ->add('lastName', null, array( 'label' => 'Фамилия: '))
            ->add('username', null, array( 'label' => 'e-mail: '))


            ->add('spec', 'entity', array('class' => 'UserBundle:Spec',
                      'label' => 'Специальность: ',
                      'empty_value'=> 'Выберите специальность') )


            ->add('group', 'shtumi_dependent_filtered_entity'
                 , array(
                     'entity_alias' => 'group_by_spec'
                 , 'label' => 'Группа: '
                 , 'empty_value'=> '== Выберите группу =='
                 , 'parent_field'=> 'spec'
                 ))
        ;

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' =>  'Acme\UserBundle\Entity\User',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'us_',
        );
    }

    public function getName()
    {
        return 'my_profile';
    }
}
