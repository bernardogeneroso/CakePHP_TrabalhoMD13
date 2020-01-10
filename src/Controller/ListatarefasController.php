<?php
// src/Controller/ListatarefasController.php

namespace App\Controller;

use App\Controller\AppController;

class ListatarefasController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Inclui o FlashComponent
    }

    public function index()
    {
        $this->set('listatarefas', $this->Listatarefas->find('all')); //Vai buscar todos os valores da tabela
    }

    public function view($id)
    {
        $listatarefa = $this->Listatarefas->get($id); //no url vai buscar o index por get
        $this->set(compact('listatarefa')); //mostra os valores que o id foi recolhido na alínea anterior
    }

    public function add()
    {
        $listatarefa = $this->Listatarefas->newEntity(); 
        if ($this->request->is('post')) { //confirma se recebeu o post
            $listatarefa = $this->Listatarefas->patchEntity($listatarefa, $this->request->getData());
            if ($this->Listatarefas->save($listatarefa)) { //ao guardar na base de dados se tudo correr bem continua no if
                $this->Flash->success(__('A sua tarefa foi guardada.')); //a mensagem mostrada pelo componente flash
                return $this->redirect(['action' => 'index']); //redireciona para o index no mesmo controller
            }
            $this->Flash->error(__('Não é possível adicionar a sua tarefa.')); //caso acha o erro, mostra o erro com o flash
        }
        $this->set('listatarefa', $listatarefa);
    }
    public function edit($id = null)
    {
        $listatarefa = $this->Listatarefas->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Listatarefas->patchEntity($listatarefa, $this->request->getData());
            if ($this->Listatarefas->save($listatarefa)) {
                $this->Flash->success(__('A sua tarefa foi atualizada.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A sua tarefa não pôde ser atualizado.'));
        }

        $this->set('listatarefa', $listatarefa);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $listatarefa = $this->Listatarefas->get($id);
        if ($this->Listatarefas->delete($listatarefa)) {
            $this->Flash->success(__('A tarefa com o id: {0} foi apagada.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>