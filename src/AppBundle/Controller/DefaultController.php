<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Menu;
use AppBundle\Form\NewMenuType;
use AppBundle\Entity\MenuLike;
use AppBundle\Form\GiveNoteType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);

    }

    /**
     * @Route("/menu/", name="menu")
     */
    public function menuAction(Request $request)
    {
        $menus = $this
       ->getDoctrine()
       ->getRepository('AppBundle:Menu')
       ->trierTousLesMenus();

       $newmenu = new Menu();

       $form = $this->createForm(NewMenuType::class, $newmenu);

     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid())
     {
       $newmenu = $form->getData();
       $em = $this->getDoctrine()->getManager();
       // tells Doctrine you want to (eventually) save the Product (no queries yet)
       $em->persist($newmenu);
       // actually executes the queries (i.e. the INSERT query)
       $em->flush();
       return $this->redirectToRoute('menu');
     }


        return $this->render('menu/menu.html.twig', array('menus' => $menus, 'form' => $form->createView()));


    }


    /**
     * @Route("/menu/{id}", name="menusolo_name")
     */
    public function menusoloAction(Request $request, $id)
    {
        $menusolo = $this->getDoctrine()
       ->getRepository('AppBundle:Menu')
       ->findMenuById($id);

       $allnotes = $this
      ->getDoctrine()
      ->getRepository('AppBundle:MenuLike')
      ->toutesLesNotes($menusolo);


       $menulike = new MenuLike();

       $rateform = $this->createForm(GiveNoteType::class, $menulike);

       $rateform->handleRequest($request);
       if ($rateform->isSubmitted() && $rateform->isValid())
       {

         $menulike = $rateform->getData();
         $menulike->setMenuassociated($menusolo);
         $em = $this->getDoctrine()->getManager();
         $em->persist($menulike);
         $em->flush();
         return $this->redirectToRoute('menu');
       }



        return $this->render('menu/menusolo.html.twig', array('menusolo' => $menusolo, 'menulike' => $menulike, 'allnotes' => $allnotes, 'form' => $rateform->createView()));
    }



}
