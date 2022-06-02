    <main>
        <section class="principal">
            <div class="flex-box-main">
                <div class="flex-group-0">
                  <p>Saldo Final</p>
                  <h1 class="valorGrande">2.000,00</h1>
                  <p>Saldo Inicial: <strong>2.000,00</strong></p>
                  <p>Mês de Janeiro</p>
                </div>
                <div class="flex-group-1">
                  <label for="">Teste1</label><br>
                  <input type="text">

                  <br>

                  <label for="">Teste2</label><br>
                  <input type="text" class="noMargin">
                </div>
                <div class="flex-group-2">
                  <label for="">Teste3</label><br>
                  <input type="text">
                  
                  <br>

                  <label for="">Teste4</label><br>
                  <input type="text" class="noMargin">
                </div>
                <div class="flex-group-3">
                  <label for="">Teste5</label><br>
                  <div class="flex-input-button">
                    <div style="flex-grow: 1">
                      <button class="more-less">+</button>
                    </div>
                    <div style="flex-grow: 8">
                      <input type="text">
                    </div>
                  </div>
              
                  <br>

                  <button class="btn btn-color-green btn-adicionar">Adicionar</button>
                </div>

            </div>
            <div class="tabela-principal">
              <table cellpadding="0" cellspacing="0">
                <tr>
                  <th>Data</th>
                  <th>Descrição</th>
                  <th>Forma de pagamento</th>
                  <th>Categoria</th>
                  <th>Quantidade</th>
                </tr>
                <tr>
                  <td>teste1</td>
                  <td>teste1</td>
                  <td>teste1</td>
                  <td>teste1</td>
                  <td>teste1</td>
                </tr>
               
              </table>
            </div>

            <div class="footer-principal">
              <h1 class="totalGasto">Total gasto no mês:</h1>
              <h1 class="valorGrande">1.000,00</h1>
            </div>
        </section>
    </main>
  </body>
</html>
<!--   <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Descrição</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Tipo</th>
                    <th><button type="button" class="btn btn-light" onclick="window.location.href='index.php?action=imovelNovo'">Novo</button></th>
                </tr>
            </thead>
            <tbody>
           <?php
                    $imoveis = call_user_func(array('ImovelController', 'listar'));

                    if(isset($imoveis) && !empty($imoveis)){
                        foreach($imoveis as $imovel){
                            ?>
                                <tr>
                                    <td><?php echo $imovel->getDescricao(); ?></td>
                                    <td><?php echo "<img src='model/img/". $imovel->getFoto() ."' alt='Foto de exibição' width='100px'/>"; ?></td>
                                    <td><?php echo $imovel->getValor(); ?></td>
                                    <td><?php echo $imovel->getTipo(); ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='index.php?action=imovelEditar&id=<?php echo $imovel->getId();?>'">Editar</button>
                                        <button type="button" class="btn btn-danger"  onclick="window.location.href='index.php?action=imovelExcluir&id=<?php echo $imovel->getId();?>'">Excluir</button>
                                    </td>
                                </tr>
                            <?php
                        }
                    } else {
                        ?>
                            <tr>
                                <td colspan="5">Nenhum registro encontrado</td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table> -->
