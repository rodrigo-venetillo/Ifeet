<?php
// Configurações de conexão com o banco de dados
$host = 'localhost';
$dbname = 'ifeet';
$user = 'root';
$pass = '';

// Conectar ao banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receber dados do formulário
    $tamanho = $_POST['tamanho'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $condicao = $_POST['condicao'];
    $preco = $_POST['preco'];

    // Verificar se o arquivo foi enviado
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $foto = $_FILES['foto'];
        $fotoTmpName = $foto['tmp_name'];
        $fotoName = basename($foto['name']);
        $fotoPath = '../uploads/' . $fotoName; // Caminho atualizado para salvar a foto fora da pasta PHP

        // Criar diretório de uploads se não existir
        if (!is_dir('../uploads')) {
            mkdir('../uploads', 0755, true); // Certifique-se de que o diretório está correto
        }

        // Mover o arquivo para o diretório de uploads
        if (move_uploaded_file($fotoTmpName, $fotoPath)) {
            // Preparar e executar a inserção no banco de dados
            $sql = "INSERT INTO calcado (tamanho, cor, marca, condicao, preco, foto) VALUES (:tamanho, :cor, :marca, :condicao, :preco, :foto)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':tamanho', $tamanho);
            $stmt->bindParam(':cor', $cor);
            $stmt->bindParam(':marca', $marca);
            $stmt->bindParam(':condicao', $condicao);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':foto', $fotoPath);
            $stmt->execute();

            // Redirecionar para a página de sucesso se o cadastro der certo
            header('Location: ../../pages/configShoes.php');
            exit();
        } else {
            echo "Erro ao fazer upload da foto.";
        }
    } else {
        echo "Foto não enviada ou ocorreu um erro no upload.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
