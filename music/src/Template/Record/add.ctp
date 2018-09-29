<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Record'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="record form large-9 medium-8 columns content">
    <?= $this->Form->create($record) ?>
    <fieldset>
        <legend><?= __('Add Record') ?></legend>
        <?php
            echo $this->Form->control('Notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
