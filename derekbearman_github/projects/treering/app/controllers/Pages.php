<?php

class Pages extends Controller {
    public function __construct(){
      
    }

    public function index(){
        if(isLoggedIn()){
            redirect('posts');
        }

        $data = [
            'title' => 'TreeRing',
            'description' => 'A social network for outdoor folk to meet and talk about outdoor stuff.'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us',
            'description' => 'Concept: Social network for outdoorsy people.'
        ];
        $this->view('pages/about', $data);
    }
}