<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $planetes->nom ?> </h1>
</div>

<div class="row"> 
    <h4>Confirmez la suppression</h4>
  <form class="" action=".?controller=Planetes&action=deleteConfirm" method="POST">
    <input type="hidden" name="planetes" value="<?= $planetes->id ?>" />
    <input type="submit" value="Supprimez la planète" />
    <br>
    <a href=".?controller=Planetes&action=index"> Retour </a>
    <br><br>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>