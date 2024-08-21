<?php

include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

?>

<div class="section no-pad-bot" id="index-banner">
    <div  class="container" >
        <br /><br />
        <div class="row center">
            <div class="col s12 n12 l12 xl12">
                <h3 class="light">RESERVADO</h3>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>ITEM</th>
                            <th>QUANTIDADE</th>
                            <th>MEDIDA</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM tb_item WHERE situacao = '1'";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)):
                        ?>
                            <tr>
                                <td><?php  echo $dados['nome'] ?></td>
                                <td><?php  echo $dados['item'] ?></td>
                                <td><?php  echo $dados['quantidade'] ?></td>
                                <td><?php  echo $dados['medida'] ?></td>
                                <div><td>R$ <?php  echo $dados['preco'] ?></td></div>

                                <td><a href="editar.php?id=<?php echo $dados['id']; ?>"
                                class="btn-floating orange"><i class="material-icons">edit</i></td>


                                <!-- Modal Structure -->
                                <div id="modal1<?php echo $dados['id']; ?>" class="modal modal-fixed-footer">
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <br /><br />
    <div class="row center">
        <div class="col s12 n12 l12 xl12">
            <h3 class="light">ENTREGUE</h3>
            <table class="striped">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>ITEM</th>
                        <th>QUANTIDADE</th>
                        <th>MEDIDA</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM tb_item WHERE situacao = '2'";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):
                    ?>
                        <tr>
                            <td><?php  echo $dados['nome'] ?></td>
                            <td><?php  echo $dados['item'] ?></td>
                            <td><?php  echo $dados['quantidade'] ?></td>
                            <td><?php  echo $dados['medida'] ?></td>
                            <div><td>R$ <?php  echo $dados['preco'] ?></td></div>

                            <td><a href="editar.php?id=<?php echo $dados['id']; ?>"
                            class="btn-floating orange"><i class="material-icons">edit</i></td>

                            <!-- Modal Structure -->
                            <div id="modal1<?php echo $dados['id']; ?>" class="modal modal-fixed-footer">
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    <br />
</div>
</div>
<div class="container">
    <br /><br />
    <div class="row center">
        <div class="col s12 n12 l12 xl12">
            <h3 class="light">CANCELADOS</h3>
            <table class="striped">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>ITEM</th>
                        <th>QUANTIDADE</th>
                        <th>MEDIDA</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM tb_item WHERE situacao = '3'";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):
                    ?>
                        <tr>
                            <td><?php  echo $dados['nome'] ?></td>
                            <td><?php  echo $dados['item'] ?></td>
                            <td><?php  echo $dados['quantidade'] ?></td>
                            <td><?php  echo $dados['medida'] ?></td>
                            <div><td>R$ <?php  echo $dados['preco'] ?></td></div>

                            <td><a href="editar.php?id=<?php echo $dados['id']; ?>"
                            class="btn-floating orange"><i class="material-icons">edit</i></td>

                            <!-- Modal Structure -->
                            <div id="modal1<?php echo $dados['id']; ?>" class="modal modal-fixed-footer">
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php
include_once 'includes/footer.php';
?>
