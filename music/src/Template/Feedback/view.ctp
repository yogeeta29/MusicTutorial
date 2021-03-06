<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
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
		
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feedback'), ['action' => 'edit', $feedback->UserId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feedback'), ['action' => 'delete', $feedback->UserId], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->UserId)]) ?> </li>
        <li><?= $this->Html->link(__('List Feedback'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feedback'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="feedback view large-9 medium-8 columns content">
    <h3><?= h($feedback->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($feedback->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EmailId') ?></th>
            <td><?= h($feedback->emailId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= h($feedback->subject) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($feedback->message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($feedback->UserId) ?></td>
        </tr>
    </table>
</div>
