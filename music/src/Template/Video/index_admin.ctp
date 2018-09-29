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
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="video index large-9 medium-8 columns content">
    <h3><?= __('Video') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('path') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($video as $video): ?>
            <tr>
                <td><?= $this->Number->format($video->id) ?></td>
                <td><?= h($video->name) ?></td>
                <td><?= h($video->path) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $video->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $video->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?>
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


			</div>

		</div>


<?= $this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js") ?>


<?= $this->element("mainfooter") ?>

	</body>