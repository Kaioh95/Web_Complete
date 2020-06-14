<?php
  
  session_start();

  foreach($_POST as $key => $area){
    $_POST[$key] = str_replace('#', '-', $area);
  }
  $texto = $_SESSION['id'] .'#'. implode('#', $_POST) . PHP_EOL;

  /*
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);
  
  $texto = $_SESSION['id'] .'#'. $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;
  */

  $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');
  fwrite($arquivo, $texto);
  fclose($arquivo);

  header('Location: abrir_chamado.php');
?>