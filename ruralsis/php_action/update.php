<?php

session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-alterar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);
    $item = mysqli_escape_string($connect, $_POST['item']);
    $preco = mysqli_escape_string($connect, $_POST['preco']);
    $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
    $medida = mysqli_escape_string($connect, $_POST['medida']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $situacao = mysqli_escape_string($connect, $_POST['situacao']);

    $sql = "UPDATE tb_item SET item ='$item', preco='$preco', quantidade='$quantidade', medida='$medida', nome='$nome', situacao='$situacao' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        header('Location: ../consultar.php?sucesso');
    else:
        header('Location: ../consultar.php?erro');
    endif;
endif;
