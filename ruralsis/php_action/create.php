<?php

session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-adicionar'])):
    $item = mysqli_escape_string($connect, $_POST['item']);
    $preco = mysqli_escape_string($connect, $_POST['preco']);
    $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
    $medida = mysqli_escape_string($connect, $_POST['medida']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $situacao = mysqli_escape_string($connect, $_POST['situacao']);


    $sql = "INSERT INTO tb_item (item, preco, quantidade, medida, nome, situacao) VALUES('$item', '$preco', '$quantidade', '$medida', '$nome', '$situacao')";

    if(mysqli_query($connect, $sql)):
        header('Location: ../consultar.php?sucesso');
    else:
        header('Location: ../consultar.php?erro');
    endif;
endif;
