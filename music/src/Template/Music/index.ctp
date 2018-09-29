
<?= $this->element("mainheader") ?>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">MusikSkool</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login">Log In</a>
            </li>
            <li class="nav-item">
              <?= $this->Html->link('Admin',['controller' => 'Admin', 'action' => 'login'],['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Team</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>MusikSkool</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">So let me guess why you are here. You love to hear Music and Songs and you might want to create your Own Music. But, You dont know the basics, and would love to learn more about Music. If what I guessed is right, then Congratulations, you are in the right place!!!</p>
            <p class="text-faded mb-5">So what are you waiting for? Sign up to our website now, and learn basics, watch video tutorials, and while you are at it, learn some musical Instruments too.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="register">Sign Up for Free</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">We have the basics that you will need to get you started, to explore the musical talent that you have within You.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">The Team</a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">You can contact us on the contact details given below</p>
          </div>
        </div>
        <div class="row">
          <div class="card col-lg-3 col-md-6" style="width: 18rem;margin-right: 20px;margin-left: 120px;">
            <div class="card-body text-center">
              <h5 class="card-title">Vijeta Raikar</h5>
              <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
              <p>8007-569-931</p>
              <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
              <p>
                <a href="mailto:your-email@your-domain.com">ssjvegita@gmail.com</a>
              </p>
            </div>
          </div>
          <div class="card col-lg-3 col-md-6" style="width: 18rem;margin-right: 20px;">
            <div class="card-body text-center">
              <h5 class="card-title">Yogeeta Shirodker</h5>
              <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
              <p>9820-556-410</p>
              <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
              <p>
                <a href="mailto:your-email@your-domain.com">yogifrosty@gmail.com</a>
              </p>
            </div>
          </div>
          <div class="card col-lg-3 col-md-6" style="width: 18rem;margin-right: 20px;">
            <div class="card-body text-center">
              <h5 class="card-title">Clinton Soares</h5>
              <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
              <p>9650-663-020</p>
              <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
              <p>
                <a href="mailto:your-email@your-domain.com">notmy@gmail.com</a>
              </p>
            </div>
          </div>
      </div>
</section>

<?= $this->element("mainfooter") ?>
