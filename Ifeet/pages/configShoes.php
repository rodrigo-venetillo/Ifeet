<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user_id'])) {
  // Se não estiver logado, redirecionar para a página de login
  header('Location: login.php');
  exit();
}

// Conectar ao banco de dados
$host = 'localhost';
$dbname = 'ifeet';
$user = 'root';
$pass = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erro ao conectar: " . $e->getMessage());
}

// Obter o ID do usuário logado
$userId = $_SESSION['user_id'];

// Buscar os tênis cadastrados pelo usuário logado
$sql = "SELECT * FROM calcado WHERE id_usuario = :userId";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
$stmt->execute();
$tenis = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-orientation" content="portrait">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/dc951fd168.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous" defer></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
  <script src="../assets/js/svg-inject.min.js"></script>

  <title>IFeet</title>
  <link rel="stylesheet" href="../assets/css/style.css">

  <style>
    .profile-container {
      text-align: center;
      margin-top: 20px;
    }

    .profile-picture {
      display: inline-block;
      width: 120px;
      height: 120px;
      border-radius: 50%;
      overflow: hidden;
      border: 3px solid #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      background: #f0f0f0;
    }

    .profile-picture img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-name {
      margin-top: 10px;
      font-size: 1.2rem;
      font-weight: 500;
      color: #333;
    }

    #button-plus {
      cursor: pointer;
    }
  </style>
</head>

<body class="d-flex bg-light m-0">
  <div class="d-flex flex-column align-items-center justify-content-between m-auto my-0 px-2 div-container position-relative">

    <header class="w-100 d-flex justify-content-center align-items-center pt-4 px-4">
      <img class="logo" src="../assets/images/logo.png" alt="Logo do IFeet">
    </header>

    <!-- Espaço para a foto de perfil e nome -->
    <div class="profile-container">
      <div class="profile-picture">
        <img src="https://via.placeholder.com/120" alt="Foto de Perfil">
      </div>
      <div class="profile-name">NOME</div>
    </div>

    <main class="w-100 d-flex align-content-center justify-content-center overflow-x-auto h-100">
      <section class="container d-flex align-items-center justify-content-center">
        <div class="row w-100">
          <?php if (!empty($tenis)): ?>
            <?php foreach ($tenis as $item): ?>
              <div class="col-12 col-md-4 mb-4">
                <div class="item">
                  <div>
                    <img src="<?php echo '../assets/uploads/' . htmlspecialchars($item['foto']); ?>" alt="Tênis" class="img-fluid">
                  </div>
                  <p><?php echo htmlspecialchars($item['marca']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p>Você ainda não cadastrou nenhum tênis.</p>
          <?php endif; ?>
        </div>

      </section>
    </main>

    <section id="button-plus" class="w-100 h-auto my-2 d-flex align-items-start justify-content-around sticky-bottom">
      <button class="d-flex align-items-center justify-content-center" onclick="window.location.href='registerTennis.php'">
        <i class="fa-solid fa-plus d-flex align-items-center justify-content-center"></i>
      </button>
    </section>

    <footer class="w-100 d-flex align-items-center justify-content-around gap-3 p-2">
      <a href="home.php"><img src="../assets/images/shoe.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="chats.php"><img src="../assets/images/chat.svg" onload="SVGInject(this)" alt="" /></a>
      <a href="configShoes.php"><img src="../assets/images/user.svg" onload="SVGInject(this)" alt="" /></a>
    </footer>
  </div>

  <script src="../assets/js/drag.js"></script>

</body>

</html>