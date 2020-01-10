<?php
// src/Model/Table/BoardsTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BoardsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
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