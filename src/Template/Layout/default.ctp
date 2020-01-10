<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
$title = $this->fetch('title');
$title = 'Work<a href="">4</a>the<a href="">noob</a>';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body style="background-color: #D3D3D3;">
    <!--<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
                <li><?= $this->Html->link('Login', ['action' => '../users/login']) ?></li>
                <li><?= $this->Html->link('Logout', ['action' => '../users/logout']) ?></li>
            </ul>
        </div>
    </nav>-->


    <div style="padding-top: 60px; padding-left: 130px; padding-right: 130px; padding-bottom: 50px;">
        <span style="font-size: 22px;" href=""><?= $title ?></span>
        <ul class="right">
            <?= $this->Html->link('Lista Tarefas', ['action' => '../Listatarefas']) ?>
            <a style="border-left: 1px solid black;height: 20px;margin-left: 6px;margin-right: 10px;"></a>
            <?= $this->Html->link('Boards', ['action' => '../Boards']) ?>
            <a style="border-left: 1px solid black;height: 20px;margin-left: 6px;margin-right: 10px;"></a>
            <?= $this->Html->link('Utilizadores', ['action' => '../Users']) ?>
            <a style="border-left: 1px solid black;height: 20px;margin-left: 6px;margin-right: 10px;"></a>
            <?= $this->Html->link('Board Utilizadores', ['action' => '../Boardsutilizadores']) ?>
        </ul>
    </div>
    
    <?= $this->Flash->render('auth') ?>
    <?= $this->Flash->render() ?>
    <div class="container clearfix" style="margin: 130px !important; margin-top: 30px !important; min-height: 0;">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
