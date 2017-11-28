<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Avis;
use AppBundle\Entity\Livre;
use AppBundle\Entity\Genre;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class BddController extends Controller
{
        /**
     * @Route("/form")
     */
    public function formAction(Request $request)
    {

        $genre = new Genre();
        $genre->setType('Action');


        $livre = new Livre();
        $livre->setTitre('le titre');
        $livre->setResume('le resume');
        $livre->setAuteur('lauteur');
        //$livre->setDate('2012-12-12');        
        $livre->setGenOid($genre);

        $form = $this->createFormBuilder($livre)
            ->add('titre', TextType::class, array('label' => 'titre'))
            ->add('resume', TextType::class, array('label' => 'resumé'))
            ->add('auteur', TextType::class, array('label' => 'auteur'))   
            ->add('date', DateType::class, array('label' => 'date', 'widget' => 'choice'))            
            ->add('save', SubmitType::class, array('label' => 'Enregistré le Livre'))
            ->getForm();


        $form->handleRequest($request);
        
            if ($form->isSubmitted() && $form->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $livre = $form->getData();
        
                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                $em = $this->getDoctrine()->getManager();
                $em->persist($genre);
                $em->persist($livre);
                $em->flush();
        
                return $this->redirectToRoute('Livre_creer');
            }


        return $this->render('default/form.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
      /**
     * @Route("/ok", name="Livre_creer")
     */
    public function successAction(){
        return $this->render('default/form_success.html.twig');
    }
}