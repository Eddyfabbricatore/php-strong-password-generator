<?php
  function generatePassword($chars, $length){
    return substr(str_shuffle($chars), 0, $length);
  }
?>