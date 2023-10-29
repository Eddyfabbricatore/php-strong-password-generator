<?php
  session_start();

  if(isset($_SESSION['passwordGenerated'])){
    $text = $_SESSION['passwordGenerated'];
  }else{
    header('Location: ./index.php');
  }

  include __DIR__ . "/partials/head.php";
?>

  <h3>La password generata è:</h3>

  <div class="box box-passwordGenerated d-flex justify-content-center align-items-center rounded">
    <p class="m-0"> <?php echo $text ?> </p>
  </div>
</body>
</html>