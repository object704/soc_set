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
use Application\Sonata\UserBundle\Entity\Msg;

class PismoFormType extends AbstractType
{

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('tema', null, array( 'label' => 'Тема сообщения: ', 'required' => true))
            ->add('letter', null, array( 'label' => 'Текст сообщения: ', 'required' => true))

        ;

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' =>  'Application\Sonata\UserBundle\Entity\Msg',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'us_',
        );
    }

    public function getName()
    {
        return 'messege';
    }
}
