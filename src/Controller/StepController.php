<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\StepType;
use App\Form\DateType;
use App\Entity\Step;
use App\Entity\Date;

class StepController extends AbstractController
{
    /**
     * @Route("/step1", name="step1", methods={"GET", "POST"})
     */
    public function step1(Request $request)
    {

        $date = new Date();
        $form = $this->createForm(DateType::class, $date);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $date = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($date);
            $entityManager->flush();

            return $this->redirectToRoute('step2');
        }
        return $this->render('step/step1.html.twig', [
            'controller_name' => 'StepController',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/step2", name="step2", methods={"GET", "POST"})
     */
    public function step2(Request $request)
    {

        $step = new Step();
        $form = $this->createForm(StepType::class, $step);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $step = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            return $this->redirectToRoute('task_success');
        }




        return $this->render('step/step2.html.twig', [
            'controller_name' => 'StepController',
            'form' => $form->createView(),
        ]);
    }
}
