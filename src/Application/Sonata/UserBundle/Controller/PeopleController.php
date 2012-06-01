<?php

namespace Application\Sonata\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Application\Sonata\UserBundle\Entity\Search\User as SearchUsers;
use Application\Sonata\UserBundle\Form\Type\Search\PeopleFormType as SearchUsersType;
use Application\Sonata\UserBundle\Entity\Grouppa;
use Application\Sonata\UserBundle\Entity\User;
use Application\Sonata\UserBundle\Entity\Files;
use Application\Sonata\UserBundle\Entity\Msg;
use Application\Sonata\UserBundle\Entity\Dialog;
use Application\Sonata\UserBundle\Form\Type\PismoFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class PeopleController extends Controller
{
    
    public function searchAction()
    {
        // show different content to student users
        if ($this->get('security.context')->isGranted('ROLE_STUDENT')) {
            // Загружаем студент-контент

            $user = $this->container->get('security.context')->getToken()->getUser();
            //Создаем доменный объект, в котором хранятся параметры поиска
            $searchUsers = new SearchUsers();
            //Создаем форму поиска
            $searchForm = $this->createForm(new SearchUsersType(), $searchUsers);
            $searchForm->bindRequest($this->getRequest());

            //Создаем построитель запросов Doctrine
            $qb = $this->getDoctrine()->getEntityManager()->getRepository('ApplicationSonataUserBundle:User')
                ->createQueryBuilder('u');
            ///$qb2 = $this->getDoctrine()->getEntityManager()->getRepository('UserBundle:Spec')
               // ->createQueryBuilder('s');

            if ($searchUsers->firstName) {
                foreach (array('u.firstName') as $field)
                    $qb->orWhere($qb->expr()->like($field, $qb->expr()->literal('%' . $searchUsers->firstName . '%')));
            }

            if ($searchUsers->lastName) {
                foreach (array('u.lastName') as $field)
                    $qb->orWhere($qb->expr()->like($field, $qb->expr()->literal('%' . $searchUsers->lastName . '%')));
            }

            //Добавляем к запросу left join c сущностью "Специальность"
            //при выводе в списке названия категории нового запроса не будет
            $qb->select('u,s')->leftJoin('u.spec', 's')->orderBy('u.firstName');

            //Добавляем к запросу left join c сущностью "Группа"
            //при выводе в списке названия категории нового запроса не будет
            $qb->select('u,g')->leftJoin('u.group', 'g');
           // echo $searchUsers->spec;

            //Категория специальность
           if ($searchUsers->spec)    {
               $repository = $this->getDoctrine()->getRepository('ApplicationSonataUserBundle:Spec');
               $sp=$repository->findOneByname($searchUsers->spec);
               $qb->andWhere($qb->expr()->eq('s.id', $sp->getId()));
           }


            //Категория специальность
            if ($searchUsers->group) {
                $repository = $this->getDoctrine()->getRepository('ApplicationSonataUserBundle:Grouppa');
                $gr=$repository->findOneBygrName($searchUsers->group);
                $qb->andWhere($qb->expr()->eq('g.id', $gr->getId()));
            }


            $entities = $qb->getQuery()->getResult();
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $qb->getQuery(),
                $this->get('request')->query->get('page', 1)/*page number*/,
                10/*limit per page*/
            );
            return $this->render('ApplicationSonataUserBundle:Navigation_temp:people.html.twig',
                array( 'entities' => $pagination, 'user'=> $user, 'searchForm' => $searchForm->createView() )
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

    public function prosmotrAction($id)
    {
        // show different content to student users
        if ($this->get('security.context')->isGranted('ROLE_STUDENT')) {
            // Загружаем студент-контент

            $em = $this->getDoctrine()->getEntityManager();

            $entity = $em->getRepository('ApplicationSonataUserBundle:User')->find($id);

            $message = new Msg();

            $user = $this->container->get('security.context')->getToken()->getUser();

             $form=$this->createForm(new PismoFormType(), $message);

                $request = $this->get('request');
                if ($request->getMethod() == 'POST') {
                    $form->bindRequest($request);
                    if ($form->isValid()) {

                        $qb = $this->getDoctrine()->getEntityManager()->getRepository('ApplicationSonataUserBundle:Dialog')
                            ->createQueryBuilder('d');

                            foreach (array('d.idUser') as $field)
                                $qb->andWhere($qb->expr()->like($field, $qb->expr()->literal('%' . $user->getId() . '%')));
                            //  $qb->orWhere($qb->expr()->like($field, $qb->expr()->literal('%' .'0'. '%')));  }
                            foreach (array('d.idUserWith') as $field)
                                $qb->andWhere($qb->expr()->like($field, $qb->expr()->literal('%' .$entity->getId(). '%')));

                        if (count($qb->getQuery()->getResult())==0) {
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

                        $message->setIdFrom($user->getId());
                        $message->setIdTo($entity->getId());
                        $message->setReader('0');
                        $message->setTime(new \DateTime('now'));


                        $em = $this->get('doctrine')->getEntityManager();

                        $em->persist($message);
                      // $em->persist($user);
                        $em->flush();

                        return $this->redirect($this->generateUrl('prosmotr', array('id' => $entity->getId())));

                    }
                }
           // $entities = $qb->getQuery()->getResult();

            return $this->render('ApplicationSonataUserBundle:Navigation_temp:prosmotr.html.twig'
                ,  array(
                    'entity' => $entity,
                    'form' => $form->createView() ,
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
