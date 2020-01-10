<?php
// src/Model/Table/BoardsutilizadoresTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BoardsutilizadoresTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('boardsutilizadores');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'id_user',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Boards', [
            'foreignKey' => 'id_board',
            'joinType' => 'INNER'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('nomeTarefa')
            ->notEmpty('descricao');

        return $validator;
    }
}
?>