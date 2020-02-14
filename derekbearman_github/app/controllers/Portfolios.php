<?php

class Portfolios extends Controller {
    public function __construct(){
      
    }

    public function index(){
        $data = [
            'title' => 'Portfolios'
        ];
        $this->view('pages/index');
    }

    public function developer(){
        $data = [
            'title' => 'Web Developer Portfolio'
        ];
        $this->view('portfolios/developer');
    }

    public function editor(){
        $data = [
            'title' => 'Copyediting Portfolio'
        ];
        $this->view('portfolios/editor', $data);
    }

    

    
}