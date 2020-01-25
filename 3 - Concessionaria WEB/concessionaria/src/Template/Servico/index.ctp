<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servico[]|\Cake\Collection\CollectionInterface $servico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Servico'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servico index large-9 medium-8 columns content">
    <h3><?= __('Servico') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cupomVenda_codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcionario_codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_codigo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servico as $servico): ?>
            <tr>
                <td><?= $this->Number->format($servico->codigo) ?></td>
                <td><?= h($servico->ativo) ?></td>
                <td><?= h($servico->descricao) ?></td>
                <td><?= $this->Number->format($servico->cupomVenda_codigo) ?></td>
                <td><?= $this->Number->format($servico->funcionario_codigo) ?></td>
                <td><?= $this->Number->format($servico->item_codigo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $servico->codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servico->codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servico->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->codigo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
