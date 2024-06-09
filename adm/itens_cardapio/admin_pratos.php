<?php
// Incluir conexão com o BD
include_once "../../conexao.php";

// Consulta para listar todos os pratos
$sql = "SELECT id, nome, descricao, preco, status FROM cardapio";
$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/images/logos/icon_logo.png" type="image/x-icon">
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
    <?php include_once "../../navbar.php"; ?>

    <!-- Conteúdo principal -->
    <main class="flex-fill" id="profile">
      <!-- Conteúdo LATERAL -->
      <?php include_once "../partials/nav_lateral_adm.php"; ?>

      <section data-current-page="perfil">
        <div class="container">
          <div class="row">
            <div class="col-12 my-4">
              <div class="row">

                <div class="fundo_bloco">
                  <div class="row p-3">
                    <div class="col-md-10 col-sm-12 px-0">
                      <h5 class="text-white">
                        Cardápio
                      </h5>
                    </div>
                    <div class="col-md-2 col-sm-12 px-0">
                      <h5 class="text-white">
                        <a href="admin_pratos_adicionar.php" class="adm_botao_cardapio">Adicionar</a>
                      </h5>
                    </div>

                    <!-- Bloco qualquer -->
                    <div class="mt-2">
                      <div class="card">
                        <div class="lista_admin_fale_conosco">
                          <table class="table">
                            <thead>
                              <tr>
                                <th class="px-4">Item</th>
                                <th class="px-4">Nome</th>
                                <th class="px-4">Descrição</th>
                                <th class="px-1">Preço</th>
                                <th class="px-1">Status</th>
                                <th class="px-4">Ação</th>
                                <th></th>
                              </tr>
                              <?php
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['nome'] . "</td>";
                                        echo "<td>" . $row['descricao'] . "</td>";
                                        echo "<td>" . $row['preco'] . "</td>";
                                        echo "<td>" . ($row['status'] ? 'Ativo' : 'Inativo') . "</td>";
                                        echo "<td>";
                                        echo "<a href='admin_pratos_editar.php?id=" . $row['id'] . "'>Editar</a> |";
                                        echo "<a href='admin_pratos_deletar.php?id=" . $row['id'] . "' onclick='return confirm(\"Tem certeza que deseja deletar?\")'>Deletar</a> | ";
                                        echo "<a href='admin_pratos_visualizar.php?id=" . $row['id'] . "'>Visualizar</a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Nenhum cardápio encontrado</td></tr>";
                                }
                              ?>
                            </thead>
                          </table>
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
  <script src="<?php echo $url?>/assets/js/fonte.js"></script>
</body>

</html>
<?php
$conexao->close();
?>
