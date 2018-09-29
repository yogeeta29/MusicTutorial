	    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') ?>
	    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic') ?>

		<?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
		<?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css') ?>

		<?= $this->Html->css('nbStyle.css') ?>
		<?= $this->Html->css('creative.css') ?>


	</head>
<style>
fieldset,legend{
color:white;
margin-left:20px;
}
input{
width:40%;
display:block;
}
label{
padding:10px;
}

button{
margin-left:20px;
background-color:brown;
width:8%;
}
</style>

	<body>
		<!-- Header Area -->
	    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	      	<div class="container">
		        <div class="container-fluid">
		            

					<div id="titleContainer">
			            <h1 class="text-uppercase" id="myTitle">
			              <strong>MusikSkool</strong>
			            </h1>
			        </div>
				</div>
	      	</div>
	      	<div id="logout">
	      		<?= $this->Html->link('<h4> Home </h4>',
                ['controller' => 'Music','action'=>'home'],
                ['escapeTitle' => false, 'class'=>'btn btn-lg'])
              ?>
				<?= $this->Html->link('<h4> Log Out </h4>',
                ['controller' => 'Music','action'=>'index'],
                ['escapeTitle' => false, 'class'=>'btn btn-lg'])
              ?>
        	</div>
	    </nav>
<div class="feedback form large-9 medium-8 columns content">
    <?= $this->Form->create($feedback) ?>
    <fieldset>
        <legend><?= __('Give Your Feedback') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('emailId');
            echo $this->Form->control('subject');
            echo $this->Form->control('message');
        ?>
    </fieldset>
    <br><?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>