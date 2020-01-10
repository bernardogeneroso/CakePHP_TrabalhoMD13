<?php
// src/Model/Table/ListatarefasTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ListatarefasTable extends Table
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