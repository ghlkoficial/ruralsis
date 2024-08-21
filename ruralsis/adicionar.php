<?php
include_once 'includes/header.php';
?>


<div class="section no-pad-bot" id="index-banner">
<div class="container">
  <br><br>
  <div class="col s12 m12 l12 xl12">
    <h2 id="title">REVERVAR ITEM</h2>
    <h7 id="title">GLOSSÁRIO: <br/>1 - RESERVADO<br/>2 - ENTREGUE<br/> 3 - CANCELADO</h7>

        <form action="php_action/create.php" method="POST">
          <div class="input-field" col s12 m4>
              <input type="text" name="nome" id="nome">
              <label for="nome">NOME</label>
          </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="item" id="item">
                <label for="item">ITEM</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="quantidade" id="quantidade">
                <label for="quantidade">QUANTIDADE</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="medida" id="medida">
                <label for="medida">MEDIDA</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="preco" id="preco">
                <label for="preco">PREÇO TOTAL</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="situacao" id="situacao">
                <label for="situacao">SITUAÇÃO</label>
            </div>
            <div class="row center">
                 <button type="submit" name="btn-adicionar" class="btn-large" id="download-button">ADICIONAR
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
