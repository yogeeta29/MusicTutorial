    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->css('login.css') ?>
<?= $this->element("mainheader") ?>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index">MusikSkool</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="register">Register</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="container clearfix">
          <div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
			<div class="panel">
				<h2 class="text-center">Users Login</h2>
				<?= $this->Form->create(); ?>
					<?= $this->Form->label('email', 'Email'); ?>
					<?= $this->Form->text('email'); ?>
					<?= $this->Form->label('password', 'Password'); ?>
					<?= $this->Form->password('password', array('type' => 'password')); ?>
					<?= $this->Form->submit('Login', array('class' => 'button')); ?>
				<?= $this->Form->end(); ?>
			</div>
		</div>
        </div>
      </div>
    </header>

<?= $this->element("mainfooter") ?>

