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

namespace Application\Sonata\UserBundle\Form\Type\Search;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class JobsFormType extends AbstractType
{

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name', null, array( 'label' => 'Ключевые слова: ', 'required' => false,))
            ->add('compania', 'entity', array(
            'label' => 'Компания',
            'required' => false,
            'class' => 'ApplicationSonataUserBundle:Compania'))
            ->add('dateFrom', 'date', array(
            'label' => 'с',
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'attr' => array('class' => 'date'),
            'required' => false))
            ->add('dateTo', 'date', array(
            'label' => 'по',
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'attr' => array('class' => 'date'),
            'required' => false));
        ;

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' =>  'Application\Sonata\UserBundle\Entity\Search\Jobs',
            'csrf_protection' => false,
        );
    }

    public function getName()
    {
        return 'people';
    }
}
