<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Cliente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cliente view large-9 medium-8 columns content">
    <h3><?= h($cliente->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($cliente->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($cliente->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pessoa Codigo') ?></th>
            <td><?= $this->Number->format($cliente->pessoa_codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Veiculo Codigo') ?></th>
            <td><?= $this->Number->format($cliente->veiculo_codigo) ?></td>
        </tr>
    </table>
</div>
