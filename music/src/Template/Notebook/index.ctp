
	    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') ?>
	    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic') ?>

		<?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
		<?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css') ?>

		<?= $this->Html->css('nbStyle.css') ?>
		<?= $this->Html->css('creative.css') ?>


	</head>


	<body>
		<!-- Header Area -->
	    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	      	<div class="container">
		        <div class="container-fluid">
		            <div class="navbar-header">
						<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn active">
							<span></span>
							<span></span>
							<span></span>
						</button>
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
                ['controller' => 'Music','action'=>'home'],
                ['escapeTitle' => false, 'class'=>'btn btn-lg'])
              ?>
				<?= $this->Html->link('<h4> Log Out </h4>',
                ['controller' => 'Music','action'=>'index'],
                ['escapeTitle' => false, 'class'=>'btn btn-lg'])
              ?>
        	</div>
	    </nav>

		<div class="wrapper">
			
			<!-- Navigation Bar -->
			<nav id="sidebar">

				<!-- Nav Header -->
				<div class="sidebar-header">
					<a><img id="myLogo" src="img/myLogo.png"></a>
				</div>

				<!-- Nav Links -->
				<ul class="list-unstyled components">

					<li><a href="#basicsMenu" data-toggle="collapse" aria-expanded="false">Basics</a>
						<ul class="collapse list-unstyled" id="basicsMenu">
							<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#introPane" role="tab">Introduction</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bLes1" role="tab">Lesson 1</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bLes2" role="tab">Lesson 2</a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bLes3" role="tab" >Lesson 3</a></li>
						</ul>
					</li>

					<li><a href="#chordsMenu" data-toggle="collapse" aria-expanded="false">Chords</a>
						<ul class="collapse list-unstyled" id="chordsMenu">
							<li><a class="nav-link" data-toggle="tab" href="#chordLes1" role="tab">Chords Lesson 1</a></li>
							<li><a href="#">Chords Beginner</a></li>
							<li><a href="#">Chords Lesson 2</a></li>
							<li><a href="#">Chords Intermediate</a></li>
							<li><a href="#">Chords Lesson 3</a></li>
							<li><a href="#">Chords Advanced</a></li>
						</ul>
					</li>
					
				</ul>

				<ul class="list-unstyled CTAs">
                   <li><?= $this->Html->link('Tutorial Videos',['controller' => 'Video', 'action' => 'index'],['class' => 'nav-link']) ?></li>
                   <li><?= $this->Html->link('Instrument',['controller' => 'Record', 'action' => ''],['class' => 'nav-link']) ?></li>
                    <li><?= $this->Html->link('tests',['controller' => 'Tests', 'action' => 'index'],['class' => 'nav-link']) ?></li>
                </ul>

			</nav>

			<!-- Page Content -->
			<div id="content">

				<div id="tabContents">
				
					<div class="tab-content">

						<div class="tab-pane active container" id="introPane">
							<br>
				            <h1 class="text-uppercase">
				              <strong>Welcome to the Classroom</strong>
				            </h1>
				            <h4>Use the button on the Top Left corner to navigate through the contents of our Notebook</h4>
					  	</div>
					  	<div class="tab-pane container" id="bLes1">
			          		<br>
					  		<?= $this->element("basicLesson1") ?>	
					  	</div>
					  	<div class="tab-pane container" id="bLes2">
			          		<br>
					  		<?= $this->element("basicLesson2") ?>
					  	</div>
					  	<div class="tab-pane container" id="bLes3">
			          		<br>
					  		<?= $this->element("basicLesson3") ?>	
					  	</div>
					  	<div class="tab-pane container" id="chordLes1">
			          		<br>
					  		<?= $this->element("chordLesson1") ?>	
					  	</div>
					</div>

				</div>

			</div>
	
			<div class="overlay"></div>
		</div>



		<?= $this->Html->script("https://code.jquery.com/jquery-1.12.0.min.js") ?>
    	<?= $this->Html->script("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js") ?>
    	<?= $this->Html->script("https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js") ?>

    	<?= $this->Html->script("nbScript") ?>

	</body>