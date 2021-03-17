


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
    <div class="table-responsive ">
        <table class="table table-sm">
          <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
              <th scope="row "><button <?= h('id=button'. strval($cliente->id)) ?> type="button" class='btn btn-info col-12 text-left toggle-button' <?= h('onclick=toggle_div('. strval($cliente->id).')') ?>> <i <?= h('id=icon'.$cliente->id) ?> class="bi bi-chevron-right toggle-icon" style="font-size: 1rem; color: white;"></i> <?= h($cliente->nome) ?>
              </button>
              <div <?= h('id=div'. strval(h($cliente->id))) ?> class='row mx-auto toggle-div mt-2 mx-auto'>
                <span class='col-12'>ID: <?= $this->Number->format($cliente->id) ?></span>
                <span class='col-6'>Nome: <?= h($cliente->nome) ?></span> <span class='col-6'>Telefone: <span class='telefone'><?= h($cliente->telefone) ?></span></span>
                <span class='col-12'>CEP: <span class='cep'><?= h($cliente->cep) ?></span></span>
                <span class='col-6'>Logradouro: <?= h($cliente->logradouro) ?></span> <span class='col-6'>Numero: <span class=''><?= h($cliente->numero) ?></span></span>
                <span class='col-6'>Bairro: <?= h($cliente->bairro) ?></span> <span class='col-6'>Complemento: <span class=''><?= h($cliente->complemento) ?></span></span>
                <span class='col-6'>Cidade: <?= h($cliente->cidade) ?></span> <span class='col-6'>Estado: <span class=''><?= h($cliente->estado) ?></span></span>

                <div class='d-block mt-3 mx-auto'>
                    <?= $this->Html->link(__('<i class="bi bi-eye" style="font-size: 1rem; color: white;"></i> Ver'), ['action' => 'view', $cliente->id], ['class' => 'btn btn-success', 'escape' => false]) ?>
                    <?= $this->Html->link(__('<i class="bi bi-pencil" style="font-size: 1rem; color: black;"></i> Editar'), ['action' => 'edit', $cliente->id], ['class' => 'btn btn-warning', 'escape' => false]) ?>
                    
                    <button type="button" class="btn btn-danger" data-toggle="modal" <?= h("data-target=#modal". strval($cliente->id)) ?>>
                      <i class="bi bi-x-octagon-fill" style="font-size: 1rem; color: white;"></i> Excluir
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" <?= h("id=modal". strval($cliente->id)) ?> tabindex="-1" role="dialog" aria-labelledby="ModalExcluir" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Exclusão de Cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        <div class='col-12 text-center'>
                            <i class="bi bi-x-octagon-fill" style="font-size: 5rem; color: red;"></i>

                        </div>
                        Deseja excluir o cliente <span class='text-danger'><?= h($cliente->nome) ?></span> ? com o ID: <?= h($cliente->id) ?>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $cliente->id], ['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                      </div>
                    </div>
                  </div>
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
        var icon = $("#icon" + id)

        icon.removeClass('toggle-icon')
        div.removeClass('toggle-div')
        button.removeClass('toggle-button')

        $(".toggle-div").hide();
        $(".toggle-button").removeClass('btn-success');
        $(".toggle-icon").removeClass('bi-chevron-down');
        $(".toggle-icon").addClass('bi-chevron-right');
        $(".toggle-button").addClass('btn-info');

        icon.addClass('toggle-icon')
        div.addClass('toggle-div')
        button.addClass('toggle-button')
        
        if(!div.is(':visible')){
            div.fadeIn(700);
            button.removeClass('btn-info')
            button.addClass('btn-success')

            icon.removeClass('bi-chevron-right')
            icon.addClass('bi-chevron-down')
        }else{
            div.fadeOut();
            button.removeClass('btn-success')
            button.addClass('btn-info')

            icon.removeClass('bi-chevron-down')
            icon.addClass('bi-chevron-right')
        }
    }
</script>
        
   