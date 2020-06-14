<?php
  session_start();

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
  //remover índeces do array de sessao
  unset($_SESSION['x']); // remove o indice somente se não existir 

  //destruir a variável de sessão
  session_destroy($_SESSION); //destroi em nova requisicao
  header('Location: index.php');

?>