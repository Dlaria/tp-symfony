<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Team;
use App\Form\FormType;
use Doctrine\ORM\EntityManagerInterface;


class FormController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/form', name: 'app_form')]
    public function index(Request $request): Response
    {
        if (!isset($_GET['teamId']))
        {
            echo "<script>document.location.href='/'</script>";
        }else{

            $repo = $this->em->getRepository(Team::class);
            $team = $repo->find($_GET['teamId']);

            $form = $this->createForm(FormType::class, $team);
            
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                $team = $form->getData();
                // $this->em->persist($team);
                // $this->em->flush();
                var_dump('is valid !');
            }
            var_dump($form->isSubmitted());
            var_dump('test');

            return $this->render('form/index.html.twig', [
                'view' => $form,
                'team' => $team
            ]);
        }
    }
}