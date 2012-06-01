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
use Application\Sonata\UserBundle\Form\Type\PismoFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class CompaniaController extends Controller
{
    
    public function showAction($id)
    {
        // show different content to student users
        if ($this->get('security.context')->isGranted('ROLE_STUDENT')) {
            // Загружаем студент-контент

            $user = $this->container->get('security.context')->getToken()->getUser();

            $em = $this->getDoctrine()->getEntityManager();

            $entity = $em->getRepository('ApplicationSonataUserBundle:Compania')->find($id);

           // echo $entity->getName();
            //Создаем доменный объект, в котором хранятся параметры поиска

            return $this->render('ApplicationSonataUserBundle:Navigation_temp:compania_show.html.twig',
               array( 'entity' => $entity, 'user'=>$user )
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
