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
            
            <section data-current-page="perfil" >
              <div class="container">
                <div class="row">
                  <div class="col-12 my-4">
                    <div class="row">

                      <div class="fundo_bloco">
                        <div class="row p-3">
                          <div class="col-md-8 col-sm-12 px-0">
                            <h5 class="text-white">
                              Mensagem do *Nome Cliente*
                            </h5>
                          </div>

                            <!-- Bloco qualquer -->
                            <div class="mt-2 justify-content-end">
                              <div class="card">
                              <div class="lista_admin_fale_conosco">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th class="px-4">Email</th>
                                      <th class="px-1">N° do Cliente</th>
                                      <th class="px-1">Telefone</th>
                                      <th class="px-1">Data de Recebimento</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Joãoalemida@gmail.com</td>
                                      <td>12345</td>
                                      <td>(21) 91235-5678</td>
                                      <td>06-04-2024</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <h5 class="px-4">Mensagem</h5>
                                <div class="card bb">
                                <p class="px-1 text-white">Nunca mais espero te encontrar
                                  Por tudo que você me fez passar
                                  Tantos dias sem entender
                                  Esperando por você
                                  Que não vai voltar
                                  Dias atrás
                                  Pensava em você, não é assim
                                  Mas olho pra trás
                                  Mas penso e sigo em frente
                                  Pra nunca mais viver assim</p>
                                <div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="text-center mt-3">
                          <a href="admin_fale_conosco.php" class="lista_admin_fale_conosco_voltar">Voltar</a>
                        <div>
                      </div>
            </section>
      
          </main>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="../assets/js/dk.js"></script>
        <script src="/assets/js/script.js"></script>
    </body>

</html>
