<?php

namespace Application\Sonata\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Application\Sonata\UserBundle\Entity\Grouppa;
use Application\Sonata\UserBundle\Entity\User;
use Application\Sonata\UserBundle\Entity\Files;
use Application\Sonata\UserBundle\Entity\Msg;
use Application\Sonata\UserBundle\Form\Type\PismoFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class MessagesController extends Controller
{
    
    public function showAction()
    {
        // show different content to student users
        if ($this->get('security.context')->isGranted('ROLE_STUDENT')) {
            // Загружаем студент-контент

            $user = $this->container->get('security.context')->getToken()->getUser();

            $qb = $this->getDoctrine()->getEntityManager()->getRepository('ApplicationSonataUserBundle:Dialog')
                ->createQueryBuilder('d');
            $qb_users = $this->getDoctrine()->getEntityManager()->getRepository('ApplicationSonataUserBundle:User')
                ->createQueryBuilder('u');
            $entities = $qb_users->getQuery()->getResult();


            foreach (array('d.idUser') as $field) {
                $qb->andWhere($qb->expr()->like($field, $qb->expr()->literal('%' .$user->getId(). '%')));
            }
            $entities2 = $qb->getQuery()->getResult();

            $em = $this->getDoctrine()->getEntityManager();

            for ($u=0; $u!=count($qb->getQuery()->getResult()); $u++)
            {
                $entity[$u] = $em->getRepository('ApplicationSonataUserBundle:User')->find($entities2[$u]->idUserWith);
            }



           /* if (count($qb->getQuery()->getResult())==0) {
                $dialog = new Dialog();
                $dialog->idUser=$user->getId();
                $dialog->idUserWith=$entity->getId();
                $em = $this->get('doctrine')->getEntityManager();
                $em->persist($dialog);
                $em->flush();
                $dialog = new Dialog();
                $dialog->idUser=$entity->getId();
                $dialog->idUserWith=$user->getId();
                $em = $this->get('doctrine')->getEntityManager();
                $em->persist($dialog);
                $em->flush();
            }
              */

             if(count($qb->getQuery()->getResult())!=0) {
                 $paginator = $this->get('knp_paginator');
                 $pagination = $paginator->paginate(
                     $entity,
                     $this->get('request')->query->get('page', 1)/*page number*/,
                     10/*limit per page*/
                 );
                 return $this->render('ApplicationSonataUserBundle:Navigation_temp:messages_show.html.twig',
                     array( 'user'=> $user ,'mes_entity'=>$pagination)
                 );
             }
            return $this->render('ApplicationSonataUserBundle:Navigation_temp:messages_show.html.twig',
                array( 'user'=> $user ,'mes_entity'=>NULL)
            );





        }
        // show different content to prepod users
        if ($this->get('security.context')->isGranted('ROLE_PREP')) {
            // Загружаем преподаватель-контент
            return $this->render('ApplicationSonataUserBundle:Role_template:prepod.html.twig');
        }
        // show different content to rabot users
        if ($this->get('security.context')->isGranted('ROLE_RAB')) {
            // Загружаем работодатель-контент
            return $this->render('ApplicationSonataUserBundle:Role_template:rabot.html.twig');
        }
    }

    public function showDialogAction($id)
    {
        // show different content to student users
        if ($this->get('security.context')->isGranted('ROLE_STUDENT')) {
            // Загружаем студент-контент

            $user = $this->container->get('security.context')->getToken()->getUser();

            $em = $this->getDoctrine()->getEntityManager();

            $entity = $em->getRepository('ApplicationSonataUserBundle:User')->find($id);


            //Создаем построитель запросов Doctrine
            $qb = $this->getDoctrine()->getEntityManager()->getRepository('ApplicationSonataUserBundle:Msg')
                ->createQueryBuilder('m');

            if (count($qb->getQuery()->getResult())>0) {
                foreach (array('m.idTo') as $field)
                    $qb->andWhere($qb->expr()->like($field, $qb->expr()->literal('%' . $user->getId() . '%')));
                foreach (array('m.idFrom') as $field)
                    $qb->andWhere($qb->expr()->like($field, $qb->expr()->literal('%' .$entity->getId(). '%')));
            }
            $messages = $qb->getQuery()->getResult();

            return $this->render('ApplicationSonataUserBundle:Navigation_temp:dialog_show.html.twig'
                ,  array(
                   'entity' => $entity,
                   // 'form' => $form->createView() ,
                    'messages'=>$messages,
                    'user'=>$user
                )
            );
        }
        // show different content to prepod users
        if ($this->get('security.context')->isGranted('ROLE_PREP')) {
            // Загружаем преподаватель-контент
            return $this->render('ApplicationSonataUserBundle:Role_template:prepod.html.twig');
        }
        // show different content to rabot users
        if ($this->get('security.context')->isGranted('ROLE_RAB')) {
            // Загружаем работодатель-контент
            return $this->render('ApplicationSonataUserBundle:Role_template:rabot.html.twig');
        }
    }


}
