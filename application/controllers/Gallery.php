<?php

class Gallery extends Application {
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        public function index()
        {
            //$this->load->view('gallery');
            $this->data['pagebody'] = 'gallery';
            $this->render();
	}
}