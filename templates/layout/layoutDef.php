<?php
$cakeDescription = 'CRUD Cliente';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <?= $this->Html->css(['bootstrap.css', 'bootstrap-grid.min.css', 'bootstrap-reboot.css']) ?>
    <?= $this->Html->script(['jquery-3.6.0.min.js', 'jquery.mask.js']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand mx-auto" href="<?= $this->Url->build('/') ?>">CRUD Cliente</a>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>

<script>//script para definir mascara
    
    $(function() {
        //$(".telefone, .celular").mask("(99) 9999-9999")
        if($(".telefone, .celular").html().length > 10){
            $(".telefone, .celular").mask("(99) 99999-9999")
        }else{
            $(".telefone, .celular").mask("(99) 9999-9999")
        }

        $(".cep").mask("00000-000")
    });
    $(".telefone, .celular").on('change paste keyup', function (argument) {
        if($(this).val().length > 14){
            $(this).mask("(00) 00000-0000")
        }else{
            $(this).mask("(00) 0000-00000")
        }
        
    });
</script>

</html>
