<?php
    if (!defined('ROOT_PATH')) {
        // Definir o caminho absoluto da raiz do projeto
        define('ROOT_PATH', dirname(__DIR__) . '/restaurante/');
    };

    // Incluir conexão com o BD
    include_once ROOT_PATH . "conexao.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// serve para o carrinho não apresentar erro nas paginas quando o usuario estiver deslogado
$id_user_cardapio = isset($_SESSION['id']) ? $_SESSION['id'] : '0';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $idCardapio_carrinho = $_POST['idCardapio'];
    $idUsuario_carrinho = $_SESSION['idUsuario'];
    $action = $_POST['action'];

    if ($action == 'increase') {
        $query = "UPDATE carrinho SET quantidade = quantidade + 1 WHERE idUsuario = ? AND idCardapio = ?";
    } elseif ($action == 'decrease') {
        $query = "UPDATE carrinho SET quantidade = quantidade - 1 WHERE idUsuario = ? AND idCardapio = ?";
    } elseif ($action == 'delete') {
        $query = "DELETE FROM carrinho WHERE idUsuario = ? AND idCardapio = ?";
    }

    $stmt = $conexao->prepare($query);
    $stmt->bind_param("ii", $idUsuario_carrinho, $idCardapio_carrinho);

    if ($stmt->execute()) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Erro ao atualizar/remover o item do carrinho.";
    }

    $stmt->close();
}


$query_total_valor_carrinho = "SELECT SUM(c.quantidade * p.preco) AS total FROM carrinho c JOIN cardapio p ON c.idCardapio = p.id WHERE c.idUsuario = ?";
$stmt = $conexao->prepare($query_total_valor_carrinho);
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($valor_total_carrinho);
$stmt->fetch();
$stmt->close();

// Exibir o total do carrinho
$totalFormatado = number_format($valor_total_carrinho, 2);

$query_cardapio_nocarrinho = "
    SELECT c.idCardapio, p.nome, p.preco, p.imagem, c.quantidade
    FROM carrinho c 
    JOIN cardapio p ON c.idCardapio = p.id 
    WHERE c.idUsuario = '$id_user_cardapio'
";
$resultado_cardapio_nocarrinho = mysqli_query($conexao, $query_cardapio_nocarrinho);


?>

<!-- carrinho lateral -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCartLabel">Carrinho de Compras</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group" id="cart-items">
            <!-- Itens do carrinho serão adicionados aqui -->
        </ul>

        <!--Produto carrinho lateral-->

        <?php while ($row_cardapio = mysqli_fetch_assoc($resultado_cardapio_nocarrinho)) { ?>
            <div class="mt-3">
                <div class="cart-item" data-id="<?php echo $row_cardapio['idCardapio']; ?>" data-price="<?php echo $row_cardapio['preco']; ?>" data-name="<?php echo $row_cardapio['nome']; ?>">
                    <div class="cart-item-info">
                        <img src="<?php echo $url . "/adm/uploads/" . $row_cardapio['imagem']; ?>" alt="<?php echo $row_cardapio['nome']; ?>" class="product-image">
                        <div>
                            <p class="nomeprodutocar"><?php echo $row_cardapio['nome']; ?></p>
                            <p class="price-prod">Preço: $<?php echo number_format($row_cardapio['preco'], 2); ?></p>
                        </div>
                    </div>
                    <div class="cart-item-actions">
                        <form  method="POST">
                            <input type="hidden" name="idCardapio" value="<?php echo $row_cardapio['idCardapio']; ?>">
                            <button type="submit" class="btn" name="action" value="decrease" id="qtdDimin">-</button>
                        </form>
                        <input type="text" class="form-control quantity" disabled value="<?php echo $row_cardapio['quantidade']; ?>">
                        <form  method="POST">
                            <input type="hidden" name="idCardapio" value="<?php echo $row_cardapio['idCardapio']; ?>">
                            <button type="submit" class="btn" name="action" value="increase" id="qtdaumen">+</button>
                        </form>
                        <form method="POST">
                            <input type="hidden" name="idCardapio" value="<?php echo $row_cardapio['idCardapio']; ?>">
                            <button type="submit" class="btn remove-item" name="action" id="btntrsah" value="delete">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg>
                            </button>
                        </form>
                        <button class="btn add-favorite m-0 p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        <?php } ?>

        <p id="total-value">Total: R$ <span><?php echo $totalFormatado; ?></span></p>
        <div class="text-center my-4">
            <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                Página Carrinho
            </button>
        </div>
    </div>
</div>

<script src="./carrinho.js" defer></script>