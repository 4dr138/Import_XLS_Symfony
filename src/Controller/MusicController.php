<?php

namespace App\Controller;

use App\Entity\Music;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MusicController  extends AbstractController
{

    private $logger;

    public function __construct(LoggerInterface $logger){
        $this->logger = $logger;
    }


    /**
     * @Route("/insertFromXls", name="insertFromXls")
     */
    public function insertFromXls(): JsonResponse
    {
        // Insertion des lignes dans la BDD à partir des informations passées via Angular
        if(!empty($_POST)) {
            $music = new Music();
            $music->setName(str_replace('undefined',null, $_POST['name']));
            $music->setCity(str_replace('undefined',null, $_POST['city']));
            $music->setCreator(str_replace('undefined',null, $_POST['creator']));
            $music->setMembers(str_replace('undefined',null, $_POST['members']));
            $music->setOrigin(str_replace('undefined',null, $_POST['origin']));
            $music->setPresentation(str_replace('undefined',null, $_POST['presentation']));
            $music->setStyle(str_replace('undefined',null, $_POST['style']));
            $music->setYearEnd(str_replace('undefined',null, $_POST['year_end']));
            $music->setYearStart(str_replace('undefined',null, $_POST['year_start']));

            $em = $this->getDoctrine()->getManager();
            $em->persist($music);
            $em->flush();
        }
        return new JsonResponse($_POST);

    }

    /**
     * @Route("/getAllBands", name="getAllBands")
     */
    public function getAllBands(){
        $aBands = $this->getDoctrine()->getRepository(Music::class)->getAllBandEntries();

        return new JsonResponse($aBands);
    }

    /**
     * @Route("/getBandById/{id}", name="getBandById")
     */
    public function getBandById($id){

        $band = $this->getDoctrine()->getRepository(Music::class)->getBandEntriesById($id);

        return new JsonResponse($band);
    }

    /**
     * @Route("/updateBand", name="updateBand")
     */
    public function updateBand(Request $request){

        $data = json_decode($request->getContent(), true);
        $bandId = $data['id'];
        $band = $this->getDoctrine()->getRepository(Music::class)->find($bandId);
        $band->setName($data['name']);
        $band->setOrigin($data['origin']);
        $band->setCity($data['city']);
        $band->setYearstart($data['year_start']);
        $band->setYearend($data['year_end']);
        $band->setCreator($data['creator']);
        $band->setMembers($data['members']);
        $band->setStyle($data['style']);
        $band->setPresentation($data['presentation']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($band);
        $em->flush();

        return new JsonResponse('Ok');
    }

    /**
     * @Route("/deleteBand", name="deleteBand")
     */
    public function deleteBand(Request $request){

        $bandId = $request->getContent();
        $band = $this->getDoctrine()->getRepository(Music::class)->find($bandId);
        $em = $this->getDoctrine()->getManager();
        $em->remove($band);
        $em->flush();

        return new JsonResponse('Ok');
    }
}