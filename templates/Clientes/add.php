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
            <h3 class='text-center mt-5'>Adicionar Cliente</h3>

            <div class="form-group">
              <?= $this->Form->control('nome', ['class' => 'form-control', 'id' => 'form_nome', 'placeholder' =>'João da Silva', 'label' => 'Nome Completo', 'maxlength' => '100', 'minlength' => '2'] ); ?>
            </div>

            <div class="form-group">
              <?= $this->Form->control('email', ['type' => 'email', 'class' => 'form-control', 'id' => 'form_email', 'placeholder' =>'email@mail.com', 'maxlength' => '50', 'minlength' => '2']); ?>
            </div>

            <div class="form-group">
              <div class='row'>
                  <div class="col">
                    <?= $this->Form->control('telefone', ['type' => 'text', 'class' => 'form-control telefone', 'id' => 'form_telefone', 'placeholder' =>'(00) 0000-0000', 'maxlength' => '14', 'minlength' => '13']); ?>
                  </div>
                  <div class="col">
                    <?= $this->Form->control('cep', ['type' => 'text', 'class' => 'form-control cep', 'id' => 'form_cep', 'placeholder' =>'00000-000', 'maxlength' => '9', 'minlength' => '9', 'label' => 'CEP']); ?>
                  </div>
              </div>
            </div>

            <div class="form-group">
              <div class='row'>
                  <div class="col">
                    <?= $this->Form->control('logradouro', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_logradouro', 'placeholder' =>'', 'maxlength' => '100', 'minlength' => '2']); ?>
                  </div>
                  <div class="col-4">
                    <?= $this->Form->control('numero', ['type' => 'number', 'class' => 'form-control', 'id' => 'form_numero', 'placeholder' =>'']); ?>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <?= $this->Form->control('complemento', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_complemento', 'placeholder' =>'', 'maxlength' => '100', 'minlength' => '0']); ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('bairro', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_bairro', 'placeholder' =>'', 'maxlength' => '100', 'minlength' => '1']); ?>
            </div>

            <div class="form-group">
              <div class='row'>
                  <div class="col">
                    <?= $this->Form->control('cidade', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_cidade', 'placeholder' =>'', 'maxlength' => '30', 'minlength' => '2']); ?>
                  </div>
                  <?= $this->Form->control('estado', ['type' => 'text', 'class' => 'form-control', 'id' => 'form_estado', 'placeholder' =>'Ex: SP', 'maxlength' => '2', 'minlength' => '2']); ?>
              </div>
            </div>
            <div class='d-block text-right'>
                <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
            
            <?= $this->Form->end() ?>
            
        </div>
    </div>
</div>
