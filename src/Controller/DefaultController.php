<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Team;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends AbstractController
{
    private $em;
    private array $teamAll;

    // A l'instanciation de la class une requête est effectuer pour récupéré toute la table team
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->teamAll = $em->getRepository(Team::class)->findAll();
    }

    // La route avec le chemin de la page du controller et le nom de la route
    #[Route('/default', name: 'app_default')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            't_array' => $this->getTeam()
        ]);
    }

    #[Route('/model', name: 'app_model')]
    public function model_page(): Response
    {
        if (!isset($_GET['teamId']))
        {
            echo "<script>document.location.href='/'</script>";
        }else{

            $repo = $this->em->getRepository(Team::class);
            $team = $repo->find($_GET['teamId']);

            return $this->render('default/model.html.twig', [
                'team' => $team
            ]);
        }
    }

    // Fonction de récupération des valeurs de chaque collaborateur
    public function getTeam(): array
    {
        // Boucle du tableau du résultat de la requete précédament effectuer
        // t_value qui est égale a l'objet Team (App\Entity\Team)
        foreach ($this->teamAll as $t_value)
        {
            // Récupération des informations et stockage dans des variables
            $id = $t_value->getId();
            $firstname = $t_value->getFirstname();
            $lastname = $t_value->getLastname();
            $photo = $t_value->getPicture();
            $hierarchie = $t_value->getHierarchie();
            // $position lui est devenu, grâce au ManyToMany, l'objet Collection (Doctrine\Common\Collections\Collection)
            $position = $t_value->getPositions()->getValues();

            $key = $this->set_hierarchie($position[0]->getLabel(), $hierarchie);

            // compact créé un tableau depuis des variables avec le même nom qu'en paramètre et récupère les valeurs
            $t_array[$key] = compact('id', 'firstname', 'lastname', 'photo', 'hierarchie', 'position');
        }
        ksort($t_array, SORT_NUMERIC);
        return $t_array;
    }

    // Fonction de création de clés du tableau t_array en fonction du label de position de Team
    public function set_hierarchie($label, $hierarchie): int
    {
        switch ($label)
        {
            // Le gérant est forcément tout en haut
            case 'Gérant':
                $key = 1;
                break;
            // le premier chiffre de la clé est sa position
            case 'Lead dev':
                $key = 1000;
                break;
            case 'Commercial':
                $key = 2000;
                break;
            case 'Comptabilité':
                $key = 3000;
                break;
            // le deuxième chiffre est si il a un supérieur 
            case 'Dev':
                $key = 1100;
                if ($hierarchie == '3/1/2')
                {
                    // le troisième si il y a doublon
                    $key = 1110;
                }
                break;
            case 'UI/UX':
                $key = 1200;
                break;
            // le quatième si il y a un supérieur au supérieur
            case 'Testeur':
                $key = 1101;
                break;
            default:
                $key = 0;
                break;
        }
        return $key;
    }
}