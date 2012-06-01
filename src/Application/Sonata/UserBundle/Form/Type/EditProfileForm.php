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
use Symfony\Component\Form\Form;
use Symfony\Component\Form\CollectionField;
use Symfony\Component\Form\TextField;
use Application\Sonata\UserBundle\Entity\User;
use Symfony\Component\Form\FileField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;



class EditProfileForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
        {
             $builder
                //->add(new FileField('avatar', array('secret' => sha1(uniqid()) )));
                ->add('avatar', 'file');



        }
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' =>  'Acme\UserBundle\Entity\User',

        );
    }
    public function getName()
    {
        return 'avatar';
    }
 }
