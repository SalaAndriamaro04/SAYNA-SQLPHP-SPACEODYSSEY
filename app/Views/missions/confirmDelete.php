<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $missions->nom ?> </h1>
</div>

<div class="row"> 
    <h4>Confirmez la suppression</h4>
  <form class="" action=".?controller=Missions&action=deleteConfirm" method="POST">
    <input type="hidden" name="missions" value="<?= $missions->id ?>" />
    <input type="submit" value="Supprimez la mission" />
    <br>
    <a href=".?controller=Missions&action=index"> Retour </a>
    <br><br>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>