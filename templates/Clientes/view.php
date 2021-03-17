<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <div class="col-12">
        <div class="clientes form content">
            <?= $this->Form->create($cliente, ['class' => 'container mb-5']) ?>
            <h3 class='text-center mt-5'>Cliente</h3>

            <div class="form-group">
              <?= $this->Form->control('nome', ['class' => 'form-control', 'id' => 'form_nome', 'placeholder' =>'João da Silva', 'label' => 'Nome Completo', 'disabled' => 'true'] ); ?>
            </div>

            <div class="form-group">
              <?= $this->Form->control('email', ['type' => 'email', 'class' => 'form-control', 'id' => 'form_email', 'placeholder' =>'email@mail.com', 'disabled' => 'true']); ?>
            </div>

            <div class="form-group">
              <div class='row'>
                  <div class="col">
                    <?= $this->Form->control('telefone', ['type' => 'text', 'class' => 'form-control telefone', 'id' => 'form_telefone', 'disabled' => 'true']); ?>
                  </div>
                  <div class="col">
                    <?= $this->Form->control('cep', ['type' => 'text', 'class' => 'form-control cep', 'id' => 'form_cep', 'disabled' => 'true']); ?>
                  </div>
              </div>
            </div>

            <div class="form-group">
              <div class='row'>
                  <div class="col">
                    <?= $this->Form->control('logradouro', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_logradouro', 'disabled' => 'true']); ?>
                  </div>
                  <div class="col-4">
                    <?= $this->Form->control('numero', ['type' => 'number', 'class' => 'form-control', 'id' => 'form_numero', 'disabled' => 'true']); ?>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <?= $this->Form->control('complemento', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_complemento', 'disabled' => 'true']); ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('bairro', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_bairro', 'disabled' => 'true']); ?>
            </div>

            <div class="form-group">
              <div class='row'>
                  <div class="col">
                    <?= $this->Form->control('cidade', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_cidade', 'disabled' => 'true']); ?>
                  </div>
                  <div class="col-4">
                    <?= $this->Form->control('estado', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_estado', 'disabled' => 'true']); ?>
                  </div>
                  
              </div>
            </div>
            <div class='d-block text-right'>
                <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('<i class="bi bi-pencil" style="font-size: 1rem; color: black;"></i> Editar'), ['action' => 'edit', $cliente->id], ['class' => 'btn btn-warning', 'escape' => false]) ?>
            </div>
            
            <?= $this->Form->end() ?>
            
        </div>
    </div>
</div>
