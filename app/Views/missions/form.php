<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $missions->nom ?> </h1>
</div>

<div class="row">        
  <form class="" action=".?controller=Missions&action=update" method="POST">
    <input type="hidden" name="missions" value="<?= $missions->id ?>" />
    <input type="text" name="nom" value="<?= $missions->nom ?>"/>
    <input type="submit" value="Submit query"/>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>