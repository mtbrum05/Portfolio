<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Pessoa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoa view large-9 medium-8 columns content">
    <h3><?= h($pessoa->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($pessoa->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($pessoa->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($pessoa->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($pessoa->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($pessoa->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($pessoa->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($pessoa->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($pessoa->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rua') ?></th>
            <td><?= h($pessoa->rua) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($pessoa->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($pessoa->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($pessoa->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade Codigo') ?></th>
            <td><?= $this->Number->format($pessoa->cidade_codigo) ?></td>
        </tr>
    </table>
</div>
