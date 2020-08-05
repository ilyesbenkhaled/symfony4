<?php  

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;     
use App\Entity\Avatar;
use App\Form\AvatarType;
use Symfony\Component\HttpFoundation\Request;

Class AvatarController extends AbstractController
{

    /**
     * @Route("/avatar", name="avatar")
     * Auth ilyeskhaled
     */
    public function avatar(Request $request)
    {
        $avatar = new Avatar();
        $form = $this->createForm(AvatarType::class, $avatar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
    
            //$file = $avatar->getName();
            $file = $form->get('name')->getData();
            $fileName = md5(uniqid().'.'.$file->guessExtension());
            $file->move($this->getParameter('upload_dir'), $fileName);
            $avatar->setName($fileName);

            return $this->redirect($this->generateUrl('avatar'));
        }

       return $this->render('avatar.html.twig', [
        'form' => $form->createView(), ]); 

    }


}