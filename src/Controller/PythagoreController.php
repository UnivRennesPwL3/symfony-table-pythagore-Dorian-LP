<?php
namespace App\Controller;

use App\Service\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{

    public function __construct(private readonly PythagoreUtility $pythagoreUtility)
    {

    }

    #[Route("/pythagore/view", name: "pythagore_view")]
    public function displayPythagoreAction(): Response
    {
        return $this->render('displayPythagore.html.twig', [
            'htmlResponse' => $this->pythagoreUtility->display(),
            'nom' => 'Le Peillet',
            'prenom' => 'Dorian',
        ]);
    }
}
