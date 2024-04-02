<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpClient\HttpClient;

class PlayListController extends AbstractController
{   
    public function getAllPlayListAction(): Response
    {
        $data = HttpClient::create()->request('GET', 'https://api.deezer.com/user/5/playlists');
    
        return new Response($data->getContent());
    }
    
    public function getDetailPlayListAction(string $id): Response
    {
        $data = HttpClient::create()->request('GET', 'https://api.deezer.com/playlist/' . $id);
    
        return new Response($data->getContent());
    }
}
