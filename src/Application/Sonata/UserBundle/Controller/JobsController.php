<?php

namespace Application\Sonata\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Application\Sonata\UserBundle\Entity\Search\Jobs as SearchJobs;
use Application\Sonata\UserBundle\Form\Type\Search\JobsFormType as SearchJobsType;
use Application\Sonata\UserBundle\Entity\Vakansia;
use Application\Sonata\UserBundle\Entity\Compania;
use Application\Sonata\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class JobsController extends Controller
{
    
    public function indexAction()
    {
        //$user=$this->container->get('fos_user.user_manager')->findUserByUsername('d@mail.ru');
       // var_dump($user); die;
        // show different content to student users
        if ($this->get('security.context')->isGranted('ROLE_STUDENT')) {
            // Загружаем студент-контент

            $user = $this->container->get('security.context')->getToken()->getUser();
            //Создаем доменный объект, в котором хранятся параметры поиска
            $searchJobs = new SearchJobs();
            //Создаем форму поиска
            $searchForm = $this->createForm(new SearchJobsType(), $searchJobs);
            $searchForm->bindRequest($this->getRequest());

            //Создаем построитель запросов Doctrine
            $qb = $this->getDoctrine()->getEntityManager()->getRepository('ApplicationSonataUserBundle:Valansia')
                ->createQueryBuilder('v');

            //Добавляем к запросу left join c сущностью "Компания"
            //при выводе в списке названия категории нового запроса не будет
            $qb->select('v,c')->leftJoin('v.compania', 'c')->orderBy('v.timeRazmech');

            //Если есть строка поиска - добавляем ИЛИ условие LIKE пои полям title, announce, text
            if ($searchJobs->name) {
                foreach (array('v.name', 'v.obazannosti', 'v.opisanie') as $field)
                    $qb->orWhere($qb->expr()->like($field, $qb->expr()->literal('%' . $searchJobs->name . '%')));
            }

            //Компания вакансии
            if ($searchJobs->compania) {
                $repository = $this->getDoctrine()->getRepository('ApplicationSonataUserBundle:Compania');
                $gr=$repository->findOneByName($searchJobs->compania);
                $qb->andWhere($qb->expr()->eq('c.id', $gr->getId()));
            }


            //Дата С которой искать новости
            if ($searchJobs->dateFrom) $qb->andWhere($qb->expr()->gt('v.timeRazmech', $qb->expr()->literal($searchJobs->dateFrom->format('Y-m-d'))));
            //Дата До которой искать новости
            if ($searchJobs->dateTo) $qb->andWhere($qb->expr()->lt('v.timeRazmech',  $qb->expr()->literal($searchJobs->dateTo->format('Y-m-d'))));

            $entities = $qb->getQuery()->getResult();
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $qb->getQuery(),
                $this->get('request')->query->get('page', 1)/*page number*/,
                10/*limit per page*/
            );
            $rowcount=  count($qb->getQuery()->getResult());

            return $this->render('ApplicationSonataUserBundle:Navigation_temp:jobs.html.twig' , array(
                    'entities' => $pagination, 'user'=> $user, 'rowcount'=>$rowcount, 'searchForm' => $searchForm->createView() )
            ) ;

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


    public function showAction($id)
    {
             if ($this->get('security.context')->isGranted('ROLE_STUDENT'))
             {
                 $em = $this->getDoctrine()->getEntityManager();

                 $user = $this->container->get('security.context')->getToken()->getUser();

                 $entity = $em->getRepository('ApplicationSonataUserBundle:Valansia')->find($id);

                 //echo $entity->getCompania()->getId();

                 return $this->render('ApplicationSonataUserBundle:Navigation_temp:job_show.html.twig' , array(
                         'entity' => $entity ,'user'=> $user)
                 ) ;
             }
    }

}
