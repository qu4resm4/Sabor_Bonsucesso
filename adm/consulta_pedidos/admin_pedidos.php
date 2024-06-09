<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/logos/icon_logo.png" type="image/x-icon">
    <title>Sabor Bom Sucesso Restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="http://localhost/restaurante/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!-- Link do google para icon-->
</head>

<body>
    <div class="bloco_protecao"></div> <!-- Bloco Branco -->
    <div class="d-flex flex-column wrapper" >
        <!-- NAVBAR -->
        <?php include_once "../../navbar.php"; ?>
        

          <!-- Conteúdo principal -->
          <main class="flex-fill" id="profile">

             <!-- Conteúdo LATERAL -->
             <?php include_once "../partials/nav_lateral_adm.php"; ?>

            <section data-current-page="perfil" >
              <div class="container">
                <div class="row">
                  <div class="col-12 my-4">
                    <div class="row">

                      <div class="fundo_bloco">
                        <div class="row p-3">
                          <div class="col-md-10 col-sm-12 px-0">
                            <h5 class="text-white">
                              Pedidos
                            </h5>
                          </div>

                            <!-- Bloco qualquer -->
                            <div class="mt-2">
                              <div class="card">
                                  <div class="lista_compras">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>N° do Pedido</th>
                                          <th>Nome</th>
                                          <th>Endereço</th>
                                          <th>Pedidos</th>
                                          <th>Hora do Pedido</th>
                                          <th>Preço Total</th>
                                          <th>Situação</th>
                                          <th>Ação</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>001</td>
                                          <td>Bruno de almeida araujo</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#endereco_pedido"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                                            </svg></a></td>
                                          <td>4</td>
                                          <td>15:00</td>
                                          <td>111,60</td>
                                          <td>Em preparo</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                          </svg></a></td>
                                        </tr>
                                        <tr>
                                          <td>004</td>
                                          <td>Jorge o lindão</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#endereco_pedido"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                                            </svg></a></td>
                                          <td>3</td>
                                          <td>14:30</td>
                                          <td>132,95</td>
                                          <td>Em preparo</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                          </svg></a></a></td>
                                        </tr>
                                        <tr>
                                          <td>010</td>
                                          <td>Oseias o pai de todos</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#endereco_pedido"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                                            </svg></a></td>
                                          <td>2</td>
                                          <td>14:00</td>
                                          <td>50,00</td>
                                          <td>Pronto</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                          </svg></a></a></td>
                                        </tr>
                                        <tr>
                                          <td>020</td>
                                          <td>Lucas cade o login</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#endereco_pedido"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                                            </svg></a></td>
                                          <td>3</td>
                                          <td>13:50</td>
                                          <td>132,95</td>
                                          <td>Pronto</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                          </svg></a></a></td>
                                        </tr>
                                        <tr>
                                          <td>020</td>
                                          <td>gabriel o quaresma</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#endereco_pedido"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                                            </svg></a></td>
                                          <td>3</td>
                                          <td>13:40</td>
                                          <td>132,95</td>
                                          <td>Pronto</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                          </svg></a></a></td>
                                        </tr>
                                        <tr>
                                          <td>020</td>
                                          <td>ze vai ser pai</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#endereco_pedido"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                                            </svg></a></td>
                                          <td>3</td>
                                          <td>13:10</td>
                                          <td>132,95</td>
                                          <td>Pronto</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                          </svg></a></a></td>
                                        </tr>
                                        <tr>
                                          <td>020</td>
                                          <td>Lua minha gatinha</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#endereco_pedido"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                                            </svg></a></td>
                                          <td>3</td>
                                          <td>11:50</td>
                                          <td>132,95</td>
                                          <td>Pronto</td>
                                          <td><a href="#" class="lista_admin_fale_conosco_botao m-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                          </svg></a></a></td>
                                        </tr>
                                        
                                      </tbody>
                                    </table>
                                  </div>                              
                                </div>
                            </div>

                        </div>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg_e">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Detalhes do Pedido 001</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="mt-2">
                                    <div class="card">
                                        <div class="lista_admin_fale_conosco">
                                          <table class="table">
                                            <thead>
                                              <tr>
                                                <th class="px-4">Item</th>
                                                <th class="px-4">Nome</th>
                                                <th class="px-1">Descrição</th>
                                                <th class="px-1">Preço</th>
                                                <th></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td><img src="/assets/images/strogonoff-de-frango.jpg" class="img_adm_cardapio" alt="strogonoff"></td>
                                                <td>Strogonoff de Frango</td>
                                                <td>Arroz Branco, Feijão preto, Batata Frita, Salada Verde e Maionese</td>
                                                <td>27,90</td>
                                              </tr>
                                              <tr>
                                                <td><img src="/assets/images/rabada.jpg" class="img_adm_cardapio" alt="strogonoff"></td>
                                                <td>Rabada</td>
                                                <td>Arroz Branco, Feijão preto, Batata Frita, Salada Verde e Maionese</td>
                                                <td>27,90</td>
                                              </tr>
                                              <tr>
                                                <td><img src="/assets/images/parmegiana_frango.jpg" class="img_adm_cardapio" alt="strogonoff"></td>
                                                <td>Parmegiana de Frango</td>
                                                <td>Arroz Branco, Feijão preto, Batata Frita, Salada Verde e Maionese</td>
                                                <td>27,90</td>
                                              </tr>
                                              <tr>
                                                <td><img src="/assets/images/parmegiana_frango.jpg" class="img_adm_cardapio" alt="strogonoff"></td>
                                                <td>Parmegiana de Frango</td>
                                                <td>Arroz Branco, Feijão preto, Batata Frita, Salada Verde e Maionese</td>
                                                <td>27,90</td>
                                              </tr>                                                 
                                              <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>Total: R$ 111,60</td>
                                              </tr>      
                                            </tbody>
                                          </table>
                                        </div>                              
                                      </div>
                                  </div>                                
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fechar</button>
                                </div>
                              </div>
                            </div>
                          </div>



                          <!-- Modal 2 -->
                        <div class="modal fade" id="endereco_pedido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Endereço</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="mb-3">
                                  <label for="cep" class="form-label">CEP:</label>
                                  <input type="text" class="form-control" id="cep" value="12345-678" readonly>
                                </div>
                                <div class="mb-3">
                                  <label for="bairro" class="form-label">Bairro:</label>
                                  <input type="text" class="form-control" id="bairro" value="Centro" readonly>
                                </div>
                                <div class="mb-3">
                                  <label for="numero" class="form-label">Número:</label>
                                  <input type="text" class="form-control" id="numero" value="123" readonly>
                                </div>
                                <div class="mb-3">
                                  <label for="complemento" class="form-label">Complemento:</label>
                                  <input type="text" class="form-control" id="complemento" value="Apto 101" readonly>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fechar</button>
                              </div>
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
