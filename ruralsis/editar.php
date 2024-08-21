<?php

include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM tb_item WHERE id ='$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>


<div class="section no-pad-bot" id="index-banner">
<div class="container">
  <br><br>
  <div class="col s12 m12 l12 xl12">
    <h2 id="title">EDITAR RESERVAS</h2>
    <h7 id="title">GLOSSÁRIO: <br/>1 - RESERVADO<br/>2 - ENTREGUE<br/> 3 - CANCELADO</h7>
    <br/>
    <br/>
    <br/>
        <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php  echo $dados['id']; ?>">
            <div class="input-field" col s12 m4>
                <input type="text" name="nome" id="nome" value="<?php  echo $dados['nome']; ?>">
                <label for="nome">NOME</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="item" id="item" value="<?php  echo $dados['item']; ?>">
                <label for="item">ITEM</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="quantidade" id="quantidade" value="<?php  echo $dados['quantidade']; ?>">
                <label for="quantidade">QUANTIDADE</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="medida" id="medida" value="<?php  echo $dados['medida']; ?>">
                <label for="medida">MEDIDA</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="preco" id="preco" value="<?php  echo $dados['preco']; ?>">
                <label for="preco">PREÇO</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="situacao" id="situacao" value="<?php  echo $dados['situacao']; ?>">
                <label for="situacao">SITUAÇÃO</label>
            </div>
            <div class="row center">
                 <button type="submit" name="btn-alterar" class="btn-large" id="download-button">ALTERAR
                 </button>
            </div>
        </form>
  </div>
  <br><br>

  <?php
include_once 'includes/footer.php';
?>
</body>
</html>
