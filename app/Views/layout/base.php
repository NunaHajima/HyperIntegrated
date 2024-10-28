<html>
    <head>
        <?= $this->include('layout/head') ?>
    </head>
    <body>
        <?= $this->include('layout/navbar') ?>
        <?= $this->include('layout/header') ?>
        <main role="main " class="container">
            <?= $this->renderSection('content') ?>
        </main>
        <?= $this->include('layout/footer') ?>

        <?= $this->include('layout/scripts') ?>
    </body>
</html>