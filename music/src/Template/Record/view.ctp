<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->UserId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->UserId], ['confirm' => __('Are you sure you want to delete # {0}?', $record->UserId)]) ?> </li>
        <li><?= $this->Html->link(__('List Record'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="record view large-9 medium-8 columns content">
    <h3><?= h($record->UserId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($record->Notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($record->UserId) ?></td>
        </tr>
    </table>
</div>
