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
                              Informações da Conta
                            </h5>
                          </div>
                          <div class="row justify-content-center custom-form">
                            <div class="col-md-3">
                              <form>

                                <div class="card bb">
                                    <h6 class="nome_menor">Endereço de email</h6>
                                    <p class="nome_maior" id="email_texto">narutouzumako@gmail.com</p>
                                </div>

                                <div class="card bb">
                                  <h6 class="nome_menor">Nome</h6>
                                  <p class="nome_maior" id="email_texto">Jailson Parker</p>
                                </div>
                                
                                <div class="card bb">
                                  <h6 class="nome_menor">Gênero</h6>
                                  <p class="nome_maior" id="email_texto">Indefinido</p>
                                </div>

                                <div class="card bb">
                                  <h6 class="nome_menor">Telefone Fixo</h6>
                                  <p class="nome_maior" id="telefone_texto">(21) 90000-0000</p>
                              </div>

                              </form>
                            </div>
                            <div class="col-md-3">
                              <form>

                                <div class="card bb">
                                  <h6 class="nome_menor">Data de Nascimento</h6>
                                  <p class="nome_maior" id="email_texto">22/08/2024</p>
                                </div>

                                <div class="card bb">
                                <h6 class="nome_menor">Senha</h6>
                                  <p class="nome_maior" id="senha_texto">***********</p>
                                </div>

                                <div class="card bb">
                                  <h6 class="nome_menor">Telefone</h6>
                                  <p class="nome_maior" id="telefone_texto">(21) 90000-0000</p>
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
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" placeholder="Digite seu email">
                        </div>
                        <div class="mb-3">
                          <label for="nome" class="form-label">Nome</label>
                          <input type="text" class="form-control" placeholder="Digite seu nome">
                        </div>
                        <div class="mb-3">
                          <label for="genero" class="form-label">Gênero</label>
                          <select class="form-select" >
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="telefone" class="form-label">Telefone Fixo</label>
                          <input type="tel" class="form-control" placeholder="Digite seu telefone">
                        </div>
                        <div class="mb-3">
                          <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                          <input type="date" class="form-control" >
                        </div>
                        <div class="mb-3">
                          <label for="senha" class="form-label">Senha</label>
                          <input type="password" class="form-control" placeholder="Digite sua senha">
                        </div>
                        <div class="mb-3">
                          <label for="telefoneCelular" class="form-label">Telefone Celular</label>
                          <input type="tel" class="form-control"  placeholder="Digite seu telefone celular">
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
