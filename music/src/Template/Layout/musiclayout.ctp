<!DOCTYPE html>

<html lang="en">

    <head>
      <title>
          <?php echo $title ?>
      </title>
      <?= $this->Html->meta('icon') ?>

    
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


       <?= $this->fetch('content') ?>

</html>