<?php
// src/Controller/BoardsutilizadoresController.php

namespace App\Controller;

use App\Controller\AppController;

class BoardsutilizadoresController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

    public function index()
    {
        $this->set('boardsutilizadores', $this->Boardsutilizadores->find('all'));
    }
}
?>