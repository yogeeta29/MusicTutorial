<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback[]|\Cake\Collection\CollectionInterface $feedback
 */
?>
	    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') ?>
	    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic') ?>

		<?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
		<?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css') ?>

		<?= $this->Html->css('nbStyle.css') ?>
		<?= $this->Html->css('creative.css') ?>
   <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

	</head>
<style>
h4{
	color:white;
}
</style>

	<body>
		<!-- Header Area -->
	    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	      	<div class="container">
		        <div class="container-fluid">
		            <div class="navbar-header">
						
					</div>

					<div id="titleContainer">
			            <h1 class="text-uppercase" id="myTitle">
			              <strong>MusikSkool</strong>
			            </h1>
			        </div>
				</div>
	      	</div>
	      	<div id="logout">
	      		<?= $this->Html->link('<h4> Home </h4>',
                ['controller' => 'Music','action'=>'home_admin'],
                ['escapeTitle' => false, 'class'=>'btn btn-lg'])
              ?>
				<?= $this->Html->link('<h4> Log Out </h4>',
                ['controller' => 'Music','action'=>'index'],
                ['escapeTitle' => false, 'class'=>'btn btn-lg'])
              ?>
        	</div>
	    </nav>
		

<div class="feedback index large-9 medium-8 columns content">
    <h3><?= __('Feedback') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('UserId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emailId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject') ?></th>
                <th scope="col"><?= $this->Paginator->sort('message') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feedback as $feedback): ?>
            <tr>
                <td><?= $this->Number->format($feedback->UserId) ?></td>
                <td><?= h($feedback->name) ?></td>
                <td><?= h($feedback->emailId) ?></td>
                <td><?= h($feedback->subject) ?></td>
                <td><?= h($feedback->message) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feedback->UserId]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feedback->UserId]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feedback->UserId], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->UserId)]) ?>
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
