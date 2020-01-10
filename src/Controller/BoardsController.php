<?php
// src/Controller/BoardsController.php

namespace App\Controller;

use App\Controller\AppController;

class BoardsController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

    public function index()
    {
        $this->set('boards', $this->Boards->find('all'));
    }

    public function view($id)
    {
        $board = $this->Boards->get($id);
        $this->set(compact('board'));
    }

    public function add()
    {
        $board = $this->Boards->newEntity();
        if ($this->request->is('post')) {
            $board = $this->Boards->patchEntity($board, $this->request->getData());
            if ($this->Boards->save($board)) {
                $this->Flash->success(__('A sua board foi guardada.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar a sua board.'));
        }
        $this->set('board', $board);
    }
    public function edit($id = null)
    {
        $board = $this->Boards->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Boards->patchEntity($board, $this->request->getData());
            if ($this->Boards->save($board)) {
                $this->Flash->success(__('A sua board foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A sua board não pôde ser atualizado.'));
        }

        $this->set('board', $board);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $board = $this->Boards->get($id);
        if ($this->Boards->delete($board)) {
            $this->Flash->success(__('A sua board com id: {0} foi apagada.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>