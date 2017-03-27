<?php

namespace BatiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \BatiBundle\Entity\Gestionnaire  ;
use BatiBundle\Entity\Artisan;
use BatiBundle\Form\GestionnaireType ;
use BatiBundle\Entity\GestionnaireRepository ; 
use BatiBundle\Form\ArtisanType ;
use DateTime ; 


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BatiBundle:Default:index.html.twig');
    }
    
//    public function connexionGAction()
//    {
//        
//        
//        $connexionG = new Gestionnaire();
//        $form = $this->createForm(new GestionnaireType(),$connexionG);
//        
//        $request = $this->container->get('request');
//        $form->handleRequest($request);
//        
//        if($form->isValid()){
//            
//            $data = $form->getData();
//            
//            
//            $em = $this->getDoctrine()->getManager()->getRepository('BatiBundle:Gestionnaire') ;
//            $gestionnaire = $em->connexionGestionnaire($data->getLoging() , $data->getMdpg()) ;
//                   
//            
//            $idG = $gestionnaire->getIdgestionnaire() ;
//           
//            
//            $session = $this->getRequest()->getSession() ;
//            
//           
//            
//            if(! $session->has("Gestionnaire") )
//            {
//                $session->set("Gestionnaire" , $gestionnaire ) ;
//                
//            } 
//        
//             return $this->render('BatiBundle:Gestionnaire:EspaceG.html.twig' , array( 'Gestionnaire' => $session->get('Gestionnaire') ));
//            // return $this->render('BatiBundle:Gestionnaire:EspaceG.html.twig' , array('gestionnaire' => $gestionnaire , "session" => $session->get("gestionnaire") ));
//            
//        }     
//        return $this->render('BatiBundle:Gestionnaire:ConnexionG.html.twig' , array('formG' => $form->createView() ));
//    }
    
    public function connexionAction(){
        
        
         $form = $this->createFormBuilder() 
            ->add('loging', 'text' , array('label' => 'Login'))
            ->add('mdpg', 'password' , array('label' => 'Mot de passe'))
            ->add('profil' , 'choice' , array('choices' => array(
                                            "g" => "Gestionnaire",
                                            "a" => "Artisan", 
                                            "e" => "Entrepreneur"
            )))
            ->add('Valider' , 'submit')
            ->add('Annuler' , 'reset')
            ->getForm()
        ;
         
         $request = $this->container->get('request');
         $form->handleRequest($request); 
         
         
         if($form->isValid()){
             
             $profil = $form['profil']->getData() ;
             $login = $form['loging']->getData() ;
             $mdp = $form['mdpg']->getData() ;
             
             switch($profil){
                 case "g" :
                     $em = $this->getDoctrine()->getManager()->getRepository("BatiBundle:Gestionnaire") ;
                     $gestionnaire = $em->connexionGestionnaire($login , $mdp) ;  
                     
                     $session = $this->getRequest()->getSession() ;
                     
                     if(! $session->has("Gestionnaire") )
                     {
                            $session->set("Gestionnaire" , $gestionnaire ) ;

                     } 
                     return $this->render('BatiBundle:Gestionnaire:EspaceG.html.twig' , array( 'Gestionnaire' => $gestionnaire ));
                     
                      break ;

                     
                     
                     
                 case "a" :
                     break ;
                 case "e" :
                     break ;
                 default :
                     break ;
                     
             }
         }
         
         return $this->render('BatiBundle:Default:index.html.twig' , array('form' => $form->createView() ));
         
         
         
    }
    
    public function gestionAAction(){
        
        $em = $this->getDoctrine()->getManager()->getRepository("BatiBundle:Artisan") ;
        
        
        
        
         return $this->render('BatiBundle:Gestionnaire:GestionA.html.twig');
    }
    
    public function creerArtisanAction(){
        
        
//        $em = $this->getDoctrine()->getManager()->getRepository("BatiBundle:Corpsmetier") ;
//        $corps = $em->findAll() ;
//        
//        $arrayCorps = array() ;
//        foreach ($corps as $unCorps){
//            $arrayCorps[$unCorps->getIdcorpsmetier()] = $unCorps->getLibelle() ;
//        }
//        
//        
//        $form = $this->createFormBuilder() 
//            ->add('nom' , 'text' , array('label' => 'Nom'))
//            ->add('prenom', 'text'  , array('label' => 'Prénom'))
//            ->add('datenaiss', 'text' , array('label' => 'Date de naissance (jj/mm/aaaa) '))
//            ->add('lieunaiss' , 'text' , array('label' => 'Lieu de naissance'))
//            ->add('telephone' , 'text' , array('label' => 'Téléphone'))
//            ->add('adresse' , 'text' , array('label' => 'Adresse'))
//            ->add('cp' , 'text' , array('label' => 'Code Postal'))
//            ->add('ville' , 'text' , array('label' => 'Ville'))
//            ->add('login' , 'text' , array('label' => 'Login'))
//            ->add('mdp' , 'password' , array('label' => 'Mot de passe'))
//            ->add('idcorpsmetier' , 'choice' , array('choices' => $arrayCorps , 'label' => "Corps de métier "))     
//            ->add('Valider' , 'submit')
//            ->add('Annuler' , 'reset')
//            ->getForm() ;
//        
//         
//         
//        if($form->isValid()){
//            
//            $artisan = new Artisan() ;
//            
//           
//            $artisan->setNom($form->get('nom')->getData()) ;
//            $artisan->setPrenom($form->get('prenom')->getData()) ;
//            $artisan->setDatenaiss($form->get('datenaiss')->getData()) ;
//            $artisan->setLieunaiss($form->get('lieunaiss')->getData()) ;
//            $artisan->setTelephone($form->get('telephone')->getData()) ;
//            $artisan->setAdresse($form->get('adresse')->getData()) ;
//            $artisan->setCp($form->get('cp')->getData()) ;
//            $artisan->setVille($form->get('ville')->getData()) ;
//            $artisan->setLogin($form->get('login')->getData()) ;
//            $artisan->setMdp($form->get('mdp')->getData()) ;
//            $artisan->setIdcorpsmetier("1") ;
//            //$artisan->setIdcorpsmetier($form->get('idcorpsmetier')->getData()->getId()) ;
//             
//            $ema = $this->getDoctrine()->getManager()->getRepository("BatiBundle:Artisan") ;
//            $ema->persist($artisan);
//            $ema->flush();
//            
//            return $this->render('BatiBundle:Gestionnaire:EspaceG.html.twig' , array('artisan' => $artisan )) ;
//            
//            
//            
//        }
        
       $em = $this->getDoctrine()->getManager()->getRepository("BatiBundle:Corpsmetier") ;
       $corps = $em->findAll() ;
       
       
        $arrayCorps = array() ;
        foreach ($corps as $unCorps){
            $arrayCorps[$unCorps->getIdcorpsmetier()] = $unCorps->getLibelle() ;
        }
        
        $artisan = new Artisan();
        $form = $this->createForm(new ArtisanType(),$artisan);
        $form ->add('idcorpsmetier' , 'entity' , array('class' => 'BatiBundle:Corpsmetier' , 'property' => "libelle"))
               ->add('Valider' , 'submit')
               ->add('Annuler' , 'reset') ;
        
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
        
        
        if($form->isValid()){
            
            $artisan = new Artisan() ;
           
            
           
            $artisan->setNom($form->get('nom')->getData()) ;
            $artisan->setPrenom($form->get('prenom')->getData()) ;
            
            
            //Convertir date 
            
            $artisan->setDatenaiss( $form->get('datenaiss')->getData()) ;
            $artisan->setLieunaiss($form->get('lieunaiss')->getData()) ;
            $artisan->setTelephone($form->get('telephone')->getData()) ;
            $artisan->setAdresse($form->get('adresse')->getData()) ;
            $artisan->setCp($form->get('cp')->getData()) ;
            $artisan->setVille($form->get('ville')->getData()) ;
            
            //concaténation à faire 
            $login = strtolower(substr(substr($form->get('prenom')->getData(),0,1) . $form->get('nom')->getData(),0,10)) ;
            
            $artisan->setLogin($login) ;
            $artisan->setMdp('azerty') ;
            
            
            $artisan->setIdcorpsmetier($form->get('idcorpsmetier')->getData()) ;
             
            $ema = $this->getDoctrine()->getManager() ;
            $ema->persist($artisan);
            $ema->flush();
            
            return $this->render('BatiBundle:Gestionnaire:EspaceG.html.twig' , array('artisan' => $artisan )) ;
            
            
            
        }
            
         return $this->render('BatiBundle:Gestionnaire:CreerArtisan.html.twig' , array('formCreerA' => $form->createView()  ));
    }
    public function afficherArtisansAction(){
        $em = $this->getDoctrine()->getManager()->getRepository('BatiBundle:Artisan') ;
        $lesArtisans = $em->findAll() ;
        
        return $this->render('BatiBundle:Gestionnaire:AfficherArtisans.html.twig' , array('lesArtisans' => $lesArtisans  ));
    }
    
    public function supprimerArtisanAction(){
        
        $req = \Symfony\Component\HttpFoundation\Request::createFromGlobals() ;
        
        $id = $req->query->get('idArtisan') ;
        
        $emArtisan = $this->getDoctrine()->getManager()->getRepository('BatiBundle:Artisan') ;
        
        $r = $emArtisan->supprimerArtisan($id);
        
        
        /*
        $emArtisan = $this->getDoctrine()->getManager()->getRepository('BatiBundle:Artisan') ;
//        $r = $em->supprimerArtisan($id);
        
        $artisan = $emArtisan->find($id) ;
        $em = $this->getDoctrine()->getManager();
        $em->remove($artisan);
////        $em->persist($artisan);
        $em->flush();
         */
        
        return $this->render('BatiBundle:Gestionnaire:ResultatSuppressionArtisan.html.twig' , array('id' => $id ));
    }
    
    public function modifierArtisanAction(){
        $req = \Symfony\Component\HttpFoundation\Request::createFromGlobals() ;
        
        $id = $req->query->get('idArtisan') ;
        
        $emArtisan = $this->getDoctrine()->getManager()->getRepository('BatiBundle:Artisan') ;
        
        $artisan = $emArtisan->find($id) ;
        $form = $this->createForm(new ArtisanType(),$artisan);
        $form ->add('idcorpsmetier' , 'entity' , array('class' => 'BatiBundle:Corpsmetier' , 'property' => "libelle"))
               ->add('Valider' , 'submit')
               ->add('Annuler' , 'reset') ;
        
        $request = $this->container->get('request');
        $form->handleRequest($request);
        
       if($form->isValid()){
            
            //$artisan = new Artisan() ;
           
            
           
            $artisan->setNom($form->get('nom')->getData()) ;
            $artisan->setPrenom($form->get('prenom')->getData()) ;
            
            
            //Convertir date 
            
            //$artisan->setDatenaiss( new DateTime($form->get('datenaiss')->getData())) ;
            $artisan->setDatenaiss($form->get('datenaiss')->getData()) ;
            $artisan->setLieunaiss($form->get('lieunaiss')->getData()) ;
            $artisan->setTelephone($form->get('telephone')->getData()) ;
            $artisan->setAdresse($form->get('adresse')->getData()) ;
            $artisan->setCp($form->get('cp')->getData()) ;
            $artisan->setVille($form->get('ville')->getData()) ;
            
            //concaténation à faire 
            //$artisan->setLogin($form->get('login')->getData()) ;
            //$artisan->setMdp($form->get('mdp')->getData()) ;
            
            
            $artisan->setIdcorpsmetier($form->get('idcorpsmetier')->getData()) ;
             
            $ema = $this->getDoctrine()->getManager() ;
            $ema->persist($artisan);
            $ema->flush();
            
            return $this->render('BatiBundle:Gestionnaire:EspaceG.html.twig' , array('artisan' => $artisan )) ;
            
            
            
        }
            
         return $this->render('BatiBundle:Gestionnaire:CreerArtisan.html.twig' , array('formCreerA' => $form->createView()  ));
        
    }
    
    public function gererArtisansAction(){
        
         return $this->render('BatiBundle:Entrepreneur:GererArtisans.html.twig');
    }
    
    public function gererChantiersAction(){
        
         return $this->render('BatiBundle:Entrepreneur:GererChantiers.html.twig');
    }
    
    public function consulterAffectationsAction(){
        
         return $this->render('BatiBundle:Entrepreneur:ConsulterAffectations.html.twig');
    }
    
     public function creerChantierAction(){
        
         return $this->render('BatiBundle:Entrepreneur:CreerChantier.html.twig');
    }
    
    public function consulterChantiersAction(){
        
         return $this->render('BatiBundle:Entrepreneur:ConsulterChantiers.html.twig');
    }
    
    
    
    public function gestionEAction(){
        
         return $this->render('BatiBundle:Gestionnaire:GestionE.html.twig');
    }
    public function connexionAAction()
    {
        return $this->render('BatiBundle:Artisan:ConnexionA.html.twig');
    }
    public function connexionEAction()
    {
        return $this->render('BatiBundle:Entrepreneur:ConnexionE.html.twig');
    }
}
