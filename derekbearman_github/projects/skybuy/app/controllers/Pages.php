<?php
class Pages extends Controller {
    public function __construct(){
      
    }

    public function index(){
        if(isLoggedIn()){
            redirect('products/index');
        }

        $data = [
            'title' => 'SkyBuy',
            'description' => 'We have some stuff you can buy.'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us',
            'description' => 'Concept: eCommerce site to put Amazon out of business.'
        ];
        $this->view('pages/about', $data);
    }
}