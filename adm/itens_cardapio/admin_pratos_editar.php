<?php
// Incluir conexão com o BD
include_once "../../conexao.php";

if (!isset($_GET['id'])) {
    echo "ID não fornecido.";
    exit;
}

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $status = isset($_POST['status']) ? 1 : 0;

    $sql = "UPDATE cardapio SET nome='$nome', descricao='$descricao', preco='$preco', status='$status' WHERE id='$id'";
    if (mysqli_query($conexao, $sql) === TRUE) {
        header('Location: admin_pratos.php');
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
    }
} else {
    $sql = "SELECT * FROM cardapio WHERE id='$id'";
    $result = mysqli_query($conexao, $sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Prato não encontrado.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo $url?>/assets/images/logos/icon_logo.png" type="image/x-icon">
  <title>Sabor Bom Sucesso Restaurante</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="<?php echo $url?>/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Link do google para icon-->
</head>

<body>
  <div class="bloco_protecao"></div> <!-- Bloco Branco -->
  <div class="d-flex flex-column wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="menu_flutuante">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">
          <img src="../assets/images/logos/logonavbar.png" class="logomenu" width="80px" alt="LOGO">
        </a>
        <div class="bloco_central"></div> <!-- Bloco Branco -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- LINKS NAV BAR -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav justify-content-center flex-grow-1 ">
            <li class="nav-item">
              <a class="nav-link mx-lg-2 fw-bold" href="admin_pratos_editar.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 fw-bold" href="../cardapio.php">Cardápio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 fw-bold" href="../contato.php">Fale Conosco</a>
            </li>
          </ul>

          <div class="btn-container">
            <span id="controle_zoom">
              <a href="javascript:void(0);" id="btnAumentar">A+</a> | <a href="javascript:void(0);" id="btnDiminuir">A-</a>
            </span>
          </div>

          <div class="dark-mod">
            <input type="checkbox" class="checkbox" id="chk" />
            <label class="label" for="chk">
              <i class="fas fa-moon"></i>
              <i class="fas fa-sun"></i>
              <div class="ball"></div>
            </label>
          </div>
          <a href="../login/login.php" class="botaologin justify-content-end mx-4">Login</a>
        </div>
      </div>
    </nav>


    <!-- Conteúdo principal -->
    <main class="flex-fill" id="profile">

      <section data-current-page="perfil">
        <div class="container">
          <div class="row">
            <div class="col-12 my-4">
              <div class="row">

                <div class="fundo_bloco">
                  <div class="row p-3">
                    <div class="col-md-8 col-sm-12 px-0">
                      <a href="admin_pratos.php" class="lista_admin_fale_conosco_voltar">Voltar</a>
                    </div>

                    <!-- Bloco qualquer -->
                    <div class="row justify-content-center">
                      <div class="col-md-10">
                        <div class="card">
                          <div class="row">
                            <div class="col-md-5">
                              <img src="/assets/images/strogonoff-de-frango.jpg" class="card-img-top" alt="Strogonoff">
                              <div class="d-flex justify-content-between mt-4">
                                <button class="btn botao_geral_cardapio">Remover</button>
                                <div>
                                  <label for="formFileLg" class="form-label label_enviar">Adicionar</label>
                                  <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-5">
                              <div class="card-body">
                                <h5 class="card-title">Strogonoff</h5>

                                <form action="" method="post">
                                  <label for="nome">Nome:</label>
                                  <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required>
                                  <br>
                                  <label for="descricao">Descrição:</label>
                                  <textarea id="descricao" name="descricao" required><?php echo $row['descricao']; ?></textarea>
                                  <br>
                                  <label for="preco">Preço:</label>
                                  <input type="text" id="preco" name="preco" value="<?php echo $row['preco']; ?>" required>
                                  <br>
                                  <label for="status">Status:</label>
                                  <input type="checkbox" id="status" name="status" <?php echo $row['status'] ? 'checked' : ''; ?>>
                                  <br>
                                  <input type="submit" value="Salvar Alterações">
                              </form>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
      </section>

    </main>

  </div>

  <!-- Script do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="<?php echo $url?>/assets/js/script.js"></script>
  <script src="<?php echo $url?>/assets/js/dk.js"></script>
</body>

</html>
<?php
  mysqli_close($conexao);
?>