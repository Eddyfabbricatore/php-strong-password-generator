<?php
  session_start();

  $text = $_SESSION['errorGeneration'];

  include __DIR__ . "/partials/head.php";
?>

  <h3>Errore nella generazione della password</h3>

  <div class="box box-error d-flex align-items-center rounded">
    <p class="m-0"> <?php echo $text ?> </p>
  </div>