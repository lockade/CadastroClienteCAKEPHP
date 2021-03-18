


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
    <div class="table-responsive mx-auto text-center ">
        <div class="table table-sm col-12 col-md-4 mx-auto">
          <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <button <?= h('id=button'. strval($cliente->id)) ?> type="button" class='btn btn-info col-12 text-left toggle-button my-2' <?= h('onclick=toggle_div('. strval($cliente->id).')') ?>> <i <?= h('id=icon'.$cliente->id) ?> class="bi bi-chevron-right toggle-icon" style="font-size: 1rem; color: white;"></i> <?= h($cliente->nome) ?>
              </button>
              <ul <?= h('id=div'. strval(h($cliente->id))) ?> class='row mx-auto toggle-div mt-2 mx-auto list-group'>
                <li class='list-group-item'>ID: <?= $this->Number->format($cliente->id) ?></li>
                <li class='list-group-item'>Nome: <?= h($cliente->nome) ?></li>
                <li class='list-group-item'>Email: <?= h($cliente->email) ?></li>
                <li class='list-group-item'>Telefone: <span class='telefone'><?= h($cliente->telefone) ?></span></li>
                <li class='list-group-item'>CEP: <span class='cep'><?= h($cliente->cep) ?></span></li>
                <li class='list-group-item'>Logradouro: <?= h($cliente->logradouro) ?></li>
                <li class='list-group-item'>Numero: <?= h($cliente->numero) ?></li>
                <li class='list-group-item'>Bairro: <?= h($cliente->bairro) ?></li>
                <li class='list-group-item'>Complemento: <?= h($cliente->complemento) ?></li>
                <li class='list-group-item'>Cidade: <?= h($cliente->cidade) ?></li>
                <li class='list-group-item'>Estado: <?= h($cliente->estado) ?></li>

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

              </ul>
            <?php endforeach; ?>
          </tbody>
        </div>
    </div>

    <?php $this->Paginator->setTemplates([
            'first' => '<a class="btn btn-outline-info" href="{{url}}">{{text}}</a></li>',
            'last' => '<a class="btn btn-outline-info" href="{{url}}">{{text}}</a></li>',
            'number' => '<a class="btn btn-outline-info" href="{{url}}">{{text}}</a></li>',
            'current' => '<a class="btn btn-outline-info active" href="{{url}}">{{text}}</a></li>'
        ]);

    ?>
    <div class='d-block mx-auto text-center container'>
        <div class='paginator btn-group'>
            <?= $this->Paginator->first('<i class="bi bi-chevron-double-left" style="font-size: 1rem; color: #17a2b8;"></i> Primeira', ['escape' => false]) ?>

            <?= $this->Paginator->numbers(['modulus' => '2']) ?>

            <?= $this->Paginator->last('<i class="bi bi-chevron-double-right" style="font-size: 1rem; color: #17a2b8;"></i> Ultima', ['escape' => false]) ?>
        </div>
    </div>
    

    <div class="row">
      <div class="col text-center">
        <?= $this->Html->link(__('Adicionar Cliente'), ['action' => 'add'], ['class' => 'btn btn-primary my-2']) ?>
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
        
   