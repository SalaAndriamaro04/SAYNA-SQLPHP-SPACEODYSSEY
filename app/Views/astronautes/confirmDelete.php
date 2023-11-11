<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $astronautes->nom ?> </h1>
</div>

<div class="row"> 
    <h4>Confirmez la suppression</h4>
  <form class="" action=".?controller=Astronautes&action=deleteConfirm" method="POST">
    <input type="hidden" name="astronautes" value="<?= $astronautes->id ?>" />
    <input type="submit" value="Supprimez l'astronaute" />
    <br>
    <a href=".?controller=Astronautes&action=index"> Retour </a>
    <br><br>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>