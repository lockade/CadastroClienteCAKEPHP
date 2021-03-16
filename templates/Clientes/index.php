


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes

<?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]

 */
?>

<div class="">
    <h3 class='text-center mt-5 mb-3'><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table class="table">
          <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
              <th scope="row "><button <?= h('id=button'. strval($this->Number->format($cliente->id))) ?> type="button" class='btn btn-info col-12 text-left toggle-button' <?= h('onclick=toggle_div('. strval($this->Number->format($cliente->id)).')') ?> > <?= h($cliente->nome) ?>
              </button>
              <div <?= h('id=div'. strval($this->Number->format($cliente->id))) ?> class='row mx-auto toggle-div mt-2 mx-auto'>
                <span class='col-12'>ID: <?= $this->Number->format($cliente->id) ?></span>
                <span class='col-6'>Nome: <?= h($cliente->nome) ?></span> <span class='col-6'>Telefone: <span class='telefone'><?= h($cliente->telefone) ?></span></span>
                <span class='col-12'>CEP: <span class='cep'><?= h($cliente->cep) ?></span></span>
                <span class='col-6'>Logradouro: <?= h($cliente->logradouro) ?></span> <span class='col-6'>Numero: <span class=''><?= h($cliente->numero) ?></span></span>
                <span class='col-6'>Bairro: <?= h($cliente->bairro) ?></span> <span class='col-6'>Complemento: <span class=''><?= h($cliente->complemento) ?></span></span>
                <span class='col-6'>Cidade: <?= h($cliente->cidade) ?></span> <span class='col-6'>Estado: <span class=''><?= h($cliente->estado) ?></span></span>

                <div class='d-block mt-3 mx-auto'>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id], ['class' => 'btn btn-warning']) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $cliente->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                </div>
                


              </div>
              </th>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
    </div>
    <div class="row">
      <div class="col text-center">
        <?= $this->Html->link(__('Adicionar Cliente'), ['action' => 'add'], ['class' => 'btn btn-primary mt-2']) ?>
      </div>
    </div>
    
</div>

<script>
    $(".toggle-div").hide();

    function toggle_div(id) {

        var div = $("#div" + id)
        var button = $("#button" + id)

        div.removeClass('toggle-div')
        button.removeClass('toggle-button')

        $(".toggle-div").hide();
        $(".toggle-button").removeClass('btn-success');
        $(".toggle-button").addClass('btn-info');

        div.addClass('toggle-div')
        button.addClass('toggle-button')
        
        if(!div.is(':visible')){
            div.fadeIn(700);
            button.removeClass('btn-info')
            button.addClass('btn-success')
        }else{
            div.fadeOut();
            button.removeClass('btn-success')
            button.addClass('btn-info')
        }
    }
</script>
        
   