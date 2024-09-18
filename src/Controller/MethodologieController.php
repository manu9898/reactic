<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MethodologieController extends AbstractController
{
    #[Route('/methodologie', name: 'app_methodologie')]
    public function index(): Response
    {
        return $this->render('methodologie/index.html.twig', [
            'title' => '<span class="text-teal-900">Notre méthodologie</span> Votre succès',
            'subtitle' => 'Comment nous créons pour vous une application web à la hauteur de vos exigences',
            'titleFirstSection' => '1 DECOUVERTE ET RECUEIL DES DONNEES',
            'smartListFistSection' => '<ul class="list-disc">
                                    <li class="
                                    font-poppins text-white leading-10 
                                    sm:text-2xl sm:top-0 sm:translate-y-10 
                                    md:text-2xl 
                                    lg:text-2xl 
                                    xl:text-3xl 
                                    2xl:text-xl 
                                    ">Micro-audits</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Interview « guérilla »</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Analyses comparatives</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Dressage de portraits type</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Modélisation des phases d’achat</li>
                                </ul>',
            'smartListSecondSection' => '<ul class="list-disc">
                                    <li class="
                                    font-poppins font-poppins text-white leading-10 
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Carnet d’hypothèses et d’objectifs</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Wish-lists must-have / would-have</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Stratégie de croissance</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Objectifs SMART</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Listing de mots clés à forte intension d’achat</li>
                                </ul>',
            'smartListThirdSection' => '<ul class="list-disc">
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10 
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Architecture de contenus</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Wireframe – zoning</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Maquette haute fidélité</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Navigation</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Contenus – proposition de valeur</li>
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Inspiration</li>
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Objectifs émotionnels et logiques</li>
                                </ul>',
            'smartListFourthSection' => '<ul class="list-disc">
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10 
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Intégration</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Conception et création base de données</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Sécurité</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Configurations</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Développement</li>
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Mise en ligne</li>
                                </ul>',
            'smartListFiveSection' => '<ul class="list-disc">
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10 
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Analyse quantitative</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Mesures taux de clics</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Mesures ROI</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl
                                    ">Mesures expérience utilisateur</li>
                                    
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Création d’hypothèses</li>
                                    <li class="
                                    font-poppins font-poppins text-lg text-white leading-10
                                    sm:text-2xl sm:top-0 sm:translate-y-10
                                    md:text-2xl
                                    lg:text-2xl
                                    xl:text-3xl
                                    2xl:text-3xl">Améliorations</li>
                                </ul>',
        ]);
    }
    #[Route('/methodologie2', name: 'app_methodologie2')]
    public function index2(): Response
    {
        return $this->render('methodologie/indexold.html.twig', [
            'controller_name' => 'MethodologieController',
        ]);
    }
}
