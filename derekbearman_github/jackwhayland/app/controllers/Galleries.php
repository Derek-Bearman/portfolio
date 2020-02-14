<?php

class Galleries extends Controller {
    public function __construct(){
      
    }

    public function index(){

        $data = [
            'title' => 'JWhayland Photography'
        ];

        $this->view('galleries/index', $data);
    }

    public function about(){
        
        $data = [
            'title' => 'About Us'
        ];

        $this->view('pages/about', $data);
    }
}