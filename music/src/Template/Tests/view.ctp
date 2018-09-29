<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->TestNo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->TestNo], ['confirm' => __('Are you sure you want to delete # {0}?', $test->TestNo)]) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tests view large-9 medium-8 columns content">
    <h3><?= h($test->TestNo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= h($test->Question) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answer') ?></th>
            <td><?= h($test->Answer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TestNo') ?></th>
            <td><?= $this->Number->format($test->TestNo) ?></td>
        </tr>
    </table>
</div>
