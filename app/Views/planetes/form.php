<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $planetes->nom ?> </h1>
</div>

<div class="row">        
  <form class="" action=".?controller=Planetes&action=update" method="POST">
    <input type="hidden" name="planetes" value="<?= $planetes->id ?>" />
    <input type="text" name="nom" value="<?= $planetes->nom ?>"/>
    <input type="submit" value="Submit query"/>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>