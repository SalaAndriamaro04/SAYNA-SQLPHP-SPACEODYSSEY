<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $astronautes->nom ?> </h1>
</div>

<div class="row">        
  <form class="" action=".?controller=Astronautes&action=update" method="POST">
    <input type="hidden" name="astronautes" value="<?= $astronautes->id ?>" />
    <input type="text" name="nom" value="<?= $astronautes->nom ?>"/>
    <input type="submit" value="Submit query"/>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>