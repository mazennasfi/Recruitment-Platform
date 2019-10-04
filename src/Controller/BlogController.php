<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Etudiant;
use App\Repository\EtudiantRepository;
use App\Entity\EtudiantStage;
use App\Repository\EtudiantStageRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\StageOffre;
use App\Repository\StageOffreRepository;
use Doctrine\Common\Persistence\ObjectManager;


class BlogController extends AbstractController
{

    
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig');
    }
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
       $repo=$this->getDoctrine()->getRepository(StageOffre::class);
       $stages=$repo->findAll();
       return $this->render('blog/index.html.twig',['stages'=>$stages]);


    }
    /**
     * @Route("/blog/show", name="show")
     */
    public function show()
    {
       $repo=$this->getDoctrine()->getRepository(EtudiantStage::class);
       $etudiantStages=$repo->findAll();
       return $this->render('blog/show.html.twig',['etudiantStages'=>$etudiantStages]);


    }
    
     /**
     * @Route("/blog/ajouter",name="ajouter")
     */
    public function create(Request $request,ObjectManager $manager)
    {
        dump($request);
        if($request->request->count()>0)
        {
            $stageOffre=new StageOffre;
            $stageOffre->setNomEntreprise($request->request->get("nomEntreprise"))->setAdressEntreprise($request->request->get("adrEntreprise"))->setPoste($request->request->get("poste"))->setDateDeb(new \DateTime())->setDateFin(new \DateTime());;
        $manager->persist($stageOffre);
        $manager->flush();
      
        }
        return  $this->render('blog/create.html.twig');
    }
   
    /**
     * @Route("/blog1/ajouter1",name="ajouter1")
     */
    public function create1(Request $request,ObjectManager $manager)
    {
        dump($request);
        if($request->request->count()>0)
        {
            $etudiantStage=new EtudiantStage;
            $etudiantStage->setNom($request->request->get("nom"))->setPrenom($request->request->get("prenom"))->setSpecialite($request->request->get("specialite"))->setEntreprise($request->request->get("entreprise"));;
        $manager->persist($etudiantStage);
        $manager->flush();
      
        }
        return  $this->render('blog1/create1.html.twig');
    }
    /**
     * @Route("/blog1", name="blog1")
     */
    public function index1()
    {
       $repo=$this->getDoctrine()->getRepository(StageOffre::class);
       $stages=$repo->findAll();
       return $this->render('blog1/index1.html.twig',['stages'=>$stages]);


    }
    /**
     * @Route("/bolg/{id}", name="supp")
     * 
     */
    public function delete(StageOffre $stage)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($stage);
        $em->flush();
        $response= new Response;
        
      return new Response('Le stage est bien supprimé ');

    }
     /**
     * @Route("/bolg/show/{id}", name="suppr")
     * 
     */
    public function deletee(EtudiantStage $etudiantStage)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($etudiantStage);
        $em->flush();
        $response= new Response;
       
       return new Response('La demande est bien supprimée ');

    }
   
    

}
