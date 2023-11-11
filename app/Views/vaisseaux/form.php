<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $vaisseaux->nom ?> </h1>
</div>

<div class="row">        
  <form class="" action=".?controller=Vaisseaux&action=update" method="POST">
    <input type="hidden" name="vaisseaux" value="<?= $vaisseaux->id ?>" />
    <input type="text" name="nom" value="<?= $vaisseaux->nom ?>"/>
    <input type="submit" value="Submit query"/>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>