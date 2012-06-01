<?php

namespace Application\Sonata\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Application\Sonata\UserBundle\Form\Type\ProfileFormType;
//use Application\Sonata\UserBundle\Form\Type\FirstType;
use Application\Sonata\UserBundle\Form\Type\EditProfileForm;
use Application\Sonata\UserBundle\Form\Type\FotoFormType;
use Application\Sonata\UserBundle\Entity\Grouppa;
use Application\Sonata\UserBundle\Entity\User;
use Application\Sonata\UserBundle\Entity\Files;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        //$user=$this->container->get('fos_user.user_manager')->findUserByUsername('d@mail.ru');
       // var_dump($user); die;
        // show different content to student users
        if ($this->get('security.context')->isGranted('ROLE_STUDENT')) {
            // Загружаем студент-контент

            $user = $this->container->get('security.context')->getToken()->getUser();

            //Создаем построитель запросов Doctrine
            $qb = $this->getDoctrine()->getEntityManager()->getRepository('ApplicationSonataUserBundle:Msg')
                ->createQueryBuilder('m');

            if (count($qb->getQuery()->getResult())>0) {
                foreach (array('m.idTo') as $field)
                    $qb->andWhere($qb->expr()->like($field, $qb->expr()->literal('%' . $user->getId() . '%')));
                  //  $qb->orWhere($qb->expr()->like($field, $qb->expr()->literal('%' .'0'. '%')));  }
                foreach (array('m.reader') as $field)
                    $qb->andWhere($qb->expr()->like($field, $qb->expr()->literal('%' .'0'. '%')));
            }
            if (count($qb->getQuery()->getResult())>0) {
                $user->message_count=count($qb->getQuery()->getResult());
                $em = $this->get('doctrine')->getEntityManager();
                $em->persist($user);
                $em->flush();
            }

            $form=$this->createForm(new ProfileFormType(), $user);
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bindRequest($request);
                if ($form->isValid()) {
                    //$user->

                    $data = $form->getData();
                    $gr= $data->getGroup();
                    $repository = $this->getDoctrine()->getRepository('ApplicationSonataUserBundle:Grouppa');
                    $gro=$repository->findOneBygrName($gr->getGrName());
                    $user->setGroup($gro);
                    $em = $this->get('doctrine')->getEntityManager();

                    $em->persist($gro);
                    $em->persist($user);
                    $em->flush();
                    return $this->redirect($this->generateUrl('prof'));
                }
            }

            return $this->render('ApplicationSonataUserBundle:Role_template:student.html.twig' ,  array(
                'form' => $form->createView(), 'user' => $user,
            )
    )
        ;
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


    public function firstAction()
    {
             if ($this->get('security.context')->isGranted('ROLE_STUDENT'))
             {
                 $user = $this->container->get('security.context')->getToken()->getUser();
                 $files = new Files();
                /* $form = $this->createFormBuilder($files)

                     ->add('file')
                     ->getForm()
                 ;    */
                 $form=$this->createForm(new FotoFormType(), $files);
                 $request = $this->get('request');
                 //$user->setPut('web/uploads/foto_users/6/foto.jpg');
                 if ($request->getMethod() == 'POST') {

                     $form->bindRequest($request);

                     if ($form->isValid()) {

                         $files->setName('foto'.$user->getId()) ;

                         $em = $this->getDoctrine()->getEntityManager();

                         $files->setUser($user);


                         $em->persist($files);

                         $em->flush();

                         $file = 'bundles/userbundle/uploads/foto_users/'.$user->getId().'/'.$files->getId().'.jpg';

                         $user->setPut($file);

                         $im = imagecreatefromjpeg($file);

                         $w = imagesx($im);
                         $h = imagesy($im);
                         $srcH=$srcW=$srcX=$srcY=0;

                         if($h>$w){
                             $srcH = $srcW = $w;
                             $srcX = 0;
                             $srcY = (int)($h-$w)/2;
                         }else if($h<$w){
                             $srcH = $srcW = $h;
                             $srcY = 0;
                             $srcX = (int)($w-$h)/2;
                         }else if($h == $w){
                             $srcH = $srcW = $h;
                             $srcX = 0; $srcY = 0;
                         }


                         $newim = imagecreatetruecolor(50, 50);
                         imagecopyresized($newim, $im, 0, 0, $srcX, $srcY, 50, 50, $srcW, $srcH);

                         imagejpeg($newim, 'bundles/userbundle/uploads/foto_users/'.$user->getId().'/avaSmall.jpg');


                         $user->setAvatar('bundles/userbundle/uploads/foto_users/'.$user->getId().'/avaSmall.jpg');

                         imagedestroy($im);
                         imagedestroy($newim);

                         $em->persist($user);
                         $em->flush();

                         $this->redirect($this->generateUrl('first_page'));
                     }
                 }


                 $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('up_foto');

                 return $this->render('ApplicationSonataUserBundle:Navigation_temp:first_page.html.twig'
                     ,  array(
                         'form' => $form->createView(),
                         'user' => $user,
                         'csrf_token' => $csrfToken,
                     )
                 );
             }
    }

}
