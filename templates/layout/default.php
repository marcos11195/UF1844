<?php
/**
 * @var \App\View\AppView $this
 */
$cakeDescription = 'Restaurante';

$user = $this->request->getSession()->read('Auth');
$currentAction = $this->request->getParam('action');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $cakeDescription ?> - <?= $this->fetch('title') ?></title>

    <?= $this->Html->meta('icon') ?>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="bg-light">

    <!-- NAVBAR BOOTSTRAP -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">

            <a class="navbar-brand">
                Restaurante los molinos
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav me-auto">

                    <?php if ($user): ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->Url->build(['controller' => 'Reservations', 'action' => 'index']) ?>">
                                Mis reservas
                            </a>
                        </li>

                        <!-- OPCIÓN 1: El botón SIEMPRE aparece -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->Url->build(['controller' => 'Reservations', 'action' => 'add']) ?>">
                                Nueva reserva
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->Url->build(['controller' => 'Tables', 'action' => 'index']) ?>">
                                Mesas
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->Url->build(['controller' => 'TimeSlots', 'action' => 'index']) ?>">
                                Tramos horarios
                            </a>
                        </li>

                    <?php endif; ?>

                </ul>

                <ul class="navbar-nav">

                    <?php if ($user): ?>

                        <!-- Saludo perfectamente alineado -->
                        <li class="nav-item d-flex align-items-center text-white me-3">
                            Hola, <?= h($user['name']) ?>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-danger" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']) ?>">
                                Cerrar sesión
                            </a>
                        </li>

                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">
                                Iniciar sesión
                            </a>
                        </li>

                    <?php endif; ?>

                </ul>

            </div>
        </div>
    </nav>

    <!-- CONTENIDO -->
    <main class="container mb-5">

        <!-- Flash messages Bootstrap -->
        <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>
    </main>

</body>
</html>
