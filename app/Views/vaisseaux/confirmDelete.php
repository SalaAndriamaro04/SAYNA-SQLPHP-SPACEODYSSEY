<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $vaisseaux->nom ?> </h1>
</div>

<div class="row"> 
    <h4>Confirmez la suppression</h4>
  <form class="" action=".?controller=Vaisseaux&action=deleteConfirm" method="POST">
    <input type="hidden" name="vaisseaux" value="<?= $vaisseaux->id ?>" />
    <input type="submit" value="Supprimez le vaisseau" />
    <br>
    <a href=".?controller=Vaisseaux&action=index"> Retour </a>
    <br><br>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>