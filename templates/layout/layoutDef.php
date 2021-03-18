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
    <?= $this->Html->script(['jquery-3.6.0.min.js', 'jquery.mask.js', 'bootstrap.bundle.js', 'bootstrap.js']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <style type="text/css" media="screen">
        .error-message {
            color:red;
        }
    </style>    
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

    $(".cep_autopreencher").change(function () {
        if($(this).val().length >= 9){
            //desabilitar os inputs para evitar apagar conteudo digitado pelo usuario
            var logradouro = $("#form_logradouro");     logradouro.prop( "disabled", true );
            var bairro = $("#form_bairro");             bairro.prop( "disabled", true );
            var complemento = $("#form_complemento");   complemento.prop( "disabled", true );
            var estado = $("#form_estado");             estado.prop( "disabled", true );
            var cidade = $("#form_cidade");             cidade.prop( "disabled", true );
            //auto preencher
            $.ajax({
                url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/',
                dataType: 'json',
                success: function(obj_cep){
                    if(typeof obj_cep.erro === 'undefined'){
                        //A depender de dados já inseridos deve-se remover os dados do usuario e subistituir por dados da API ?
                        /* 
                        if(logradouro.val() == ''){
                            logradouro.val(obj_cep.logradouro)
                        }

                        if(bairro.val() == ''){
                            bairro.val(obj_cep.bairro)
                        }
                        
                        if(complemento.val() == ''){
                            complemento.val(obj_cep.complemento)
                        }

                        if(estado.val() == ''){
                            estado.val(obj_cep.uf)
                        }

                        if(cidade.val() == ''){
                            cidade.val(obj_cep.localidade)
                        }*/


                        logradouro.val(obj_cep.logradouro)
                        bairro.val(obj_cep.bairro)
                        complemento.val(obj_cep.complemento)
                        estado.val(obj_cep.uf)
                        cidade.val(obj_cep.localidade)
                    }
                }
            });

            logradouro.prop( "disabled", false );
            bairro.prop( "disabled", false );
            complemento.prop( "disabled", false );
            estado.prop( "disabled", false );
            cidade.prop( "disabled", false );
        }
    })
</script>

</html>
