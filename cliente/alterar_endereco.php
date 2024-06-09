<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/logos/icon_logo.png" type="image/x-icon">
    <title>Sabor Bom Sucesso Restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!-- Link do google para icon-->
</head>

<body>
    <div class="bloco_protecao"></div> <!-- Bloco Branco -->
    <div class="d-flex flex-column wrapper" >
        <!-- NAVBAR -->
        <?php include_once "../navbar.php"; ?>

        <!-- carrinho lateral -->
        <?php include_once "../partials/carrinho.php"; ?>
        

          <!-- Conteúdo principal -->
          <main class="flex-fill" id="profile">

            <!-- Conteúdo LATERAL -->
            <?php include_once "./partials/nav_lateral_cliente.php"; ?>

            
            <section data-current-page="perfil" >
              <div class="container">
                <div class="row">
                  <div class="col-12 my-4">
                    <div class="row">

                      <div class="fundo_bloco">
                        <div class="row p-3">
                          <div class="col-md-10 col-sm-12 px-0">
                            <h5 class="text-white">
                              Informações de Endereço
                            </h5>
                          </div>
                          <div class="row justify-content-center custom-form">
                            <div class="col-md-3">
                              <form>

                                <div class="card bb">
                                  <h6 class="nome_menor">CEP</h6>
                                  <p class="nome_maior" id="cep_bloco">21657-850</p>
                                </div>

                                <div class="card bb">
                                  <h6 class="nome_menor">Logradouro</h6>
                                  <p class="nome_maior" id="logradouro_bloco">Travessa</p>
                                </div>
                                
                                <div class="card bb">
                                  <h6 class="nome_menor">Número</h6>
                                  <p class="nome_maior" id="numero_bloco">120</p>
                                </div>

                                <div class="card bb">
                                  <h6 class="nome_menor">Complemento</h6>
                                  <p class="nome_maior" id="complemento_bloco">Rua da Caixa</p>
                                </div>

                              </form>
                            </div>
                            <div class="col-md-3">
                              <form>

                                <div class="card bb">
                                  <h6 class="nome_menor">Bairro</h6>
                                  <p class="nome_maior" id="bairro_bloco">Galeão</p>
                                </div>

                                <div class="card bb">
                                  <h6 class="nome_menor">Cidade</h6>
                                  <p class="nome_maior" id="cidade_bloco">Rio de Janeiro</p>
                                </div>

                                <div class="card bb">
                                  <h6 class="nome_menor">Uf</h6>
                                  <p class="nome_maior" id="uf_bloco">RJ</p>
                                </div>

                                <div class="bbb">
                                  <button type="button" class="btn btn-dark botao_alterar_perfil" data-bs-toggle="modal" data-bs-target="#myModal">Editar</button>
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>      
                    </div>               
                  </div> 

                </div>
              </div>

              <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
              
                    <div class="modal-header">
                      <h4 class="modal-title">Atualizar Cadastro</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
              
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="cep" class="form-label">CEP:</label>
                          <input type="text" class="form-control" id="cep" name="cep">
                        </div>
                        <div class="mb-3">
                          <label for="logradouro" class="form-label">Logradouro:</label>
                          <input type="text" class="form-control" id="logradouro" name="logradouro">
                        </div>
                        <div class="mb-3">
                          <label for="numero" class="form-label">Número:</label>
                          <input type="text" class="form-control" id="numero" name="numero">
                        </div>
                        <div class="mb-3">
                          <label for="complemento" class="form-label">Complemento:</label>
                          <input type="text" class="form-control" id="complemento" name="complemento">
                        </div>
                        <div class="mb-3">
                          <label for="bairro" class="form-label">Bairro:</label>
                          <input type="text" class="form-control" id="bairro" name="bairro">
                        </div>
                        <div class="mb-3">
                          <label for="cidade" class="form-label">Cidade:</label>
                          <input type="text" class="form-control" id="cidade" name="cidade">
                        </div>
                        <div class="mb-3">
                          <label for="uf" class="form-label">UF:</label>
                          <input type="text" class="form-control" id="uf" name="uf">
                        </div>
                      </form>
                    </div>
              
                    <div class="modal-footer">
                      <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Salvar Alterações</button>
                    </div>
              
                  </div>
                </div>
              </div>
              


            </section>
      
          </main>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="../assets/js/script.js"></script>
        <script src="../assets/js/dk.js"></script>
    </body>

</html>
