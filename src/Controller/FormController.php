<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
/**
* @Route("/form", name="form_page")
*/

    #[Route('/form', name: 'app_form')]
    public function formPage(): Response
    {
    return $this->render('form/form.html.twig');
    }
}
