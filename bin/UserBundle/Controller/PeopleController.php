<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Acme\UserBundle\Entity\Search\User as SearchUsers;
use Acme\UserBundle\Form\Type\Search\PeopleFormType as SearchUsersType;
use Acme\UserBundle\Entity\Grouppa;
use Acme\UserBundle\Entity\User;
use Acme\UserBundle\Entity\Files;
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
            $qb = $this->getDoctrine()->getEntityManager()->getRepository('UserBundle:User')
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
               $repository = $this->getDoctrine()->getRepository('UserBundle:Spec');
               $sp=$repository->findOneByname($searchUsers->spec);
               $qb->andWhere($qb->expr()->eq('s.id', $sp->getId()));
           }


            //Категория специальность
            if ($searchUsers->group) {
                $repository = $this->getDoctrine()->getRepository('UserBundle:Grouppa');
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
            return $this->render('UserBundle:Navigation_temp:people.html.twig',
                array( 'entities' => $pagination, 'user'=> $user, 'searchForm' => $searchForm->createView() )
            );
        }
        // show different content to prepod users
        if ($this->get('security.context')->isGranted('ROLE_PREP')) {
            // Загружаем преподаватель-контент
            return $this->render('UserBundle:Role_template:prepod.html.twig');
        }
        // show different content to rabot users
        if ($this->get('security.context')->isGranted('ROLE_RAB')) {
            // Загружаем работодатель-контент
            return $this->render('UserBundle:Role_template:rabot.html.twig');
        }
    }

    public function prosmotrAction($id)
    {
        // show different content to student users
        if ($this->get('security.context')->isGranted('ROLE_STUDENT')) {
            // Загружаем студент-контент

            $em = $this->getDoctrine()->getEntityManager();

            $entity = $em->getRepository('UserBundle:User')->find($id);




            // $form=$this->createForm(new PeopleFormType(), $user);
            /*
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                //$user->
                $data = $form->getData();
                $gr= $data->getGroup();
                $repository = $this->getDoctrine()->getRepository('UserBundle:Grouppa');
                $gro=$repository->findOneBygrName($gr->getGrName());
                $user->setGroup($gro);
                $em = $this->get('doctrine')->getEntityManager();

                $em->persist($gro);
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('prof'));
            }
        }    */
           // $entities = $qb->getQuery()->getResult();

            return $this->render('UserBundle:Navigation_temp:prosmotr.html.twig'
                ,  array(
                    'entity' => $entity,
                )
            );
        }
        // show different content to prepod users
        if ($this->get('security.context')->isGranted('ROLE_PREP')) {
            // Загружаем преподаватель-контент
            return $this->render('UserBundle:Role_template:prepod.html.twig');
        }
        // show different content to rabot users
        if ($this->get('security.context')->isGranted('ROLE_RAB')) {
            // Загружаем работодатель-контент
            return $this->render('UserBundle:Role_template:rabot.html.twig');
        }
    }


}
