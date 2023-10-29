<?php
  include __DIR__ . "/partials/functions.php";

  $characters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890\'\|!"£$%&/()=?^+-*/èòàùì.,;:_';

  if(isset($_POST['generatePassword'])){
    if($_POST['generatePassword'] < 8 || $_POST['generatePassword'] > 32){
      session_start();

      $_SESSION['errorGeneration'] = 'Errore! La lunghezza della password deve avere un minimo di 8 caratteri e un massimo di 32 caratteri';

      header('Location: ./errorGeneration.php');
    }else{
      session_start();

      $_SESSION['passwordGenerated'] = generatePassword($characters, $_POST['generatePassword']);
      
      header('Location: ./passwordGenerated.php');
    }
  }

  include __DIR__ . "/partials/head.php";
?>

  <h1 class="mb-3">Strong Password Generator</h1>

  <h2 class="mb-3">Genera una password sicura</h2>

  <form action="index.php" method="POST">
    <div class="box box-paragraph d-flex rounded">
      <p class="m-0">Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri</p>
    </div>

    <div class="box box-password d-flex flex-column rounded">
      <div class="password d-flex justify-content-between align-items-center">
        <span>Lunghezza password:</span>

        <input type="number" name="generatePassword" class="form-control">
      </div>

      <div class="btns d-flex">
        <button type="submit" class="btn btn-primary">Invia</button>

        <button type="submit" class="btn btn-secondary ms-3">Annulla</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>