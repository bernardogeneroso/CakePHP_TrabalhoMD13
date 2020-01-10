<?php
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

    public function index()
    {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O utilizador foi guardado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o utilizador.'));
        }
        $this->set('user', $user);
    }
    public function edit($id = null)
    {
        $user = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O utilizador foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O utilizador não pôde ser atualizado.'));
        }

        $this->set('user', $user);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('O utilizador com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>