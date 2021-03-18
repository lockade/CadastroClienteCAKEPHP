<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function carregarLayout(){
        $this->viewBuilder()->setLayout('layoutDef');
    }
   

    public function index()
    {
        $this->carregarLayout();

        

        $this->paginate = [
            'limit' => 10,
            'order' => [
                'Clientes.id' => 'asc'
            ]
        ];

        $clientes = $this->paginate($this->Clientes);

        

        $this->set(compact('clientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->carregarLayout();
        $cliente = $this->Clientes->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('cliente'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->carregarLayout();
        $cliente = $this->Clientes->newEmptyEntity();
        if ($this->request->is('post')) {

            //trabalhando a mask do telefone antes de enviar para a validação.
            $data = $this->request->getData();
            $regex = '/[^\d]/';
            $data['telefone'] = preg_replace($regex, '', $data['telefone']);
            $data['cep'] = preg_replace($regex, '', $data['cep']);
            $data['estado'] = strtoupper($data['estado']);

            $cliente = $this->Clientes->patchEntity($cliente, $data);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('Cliente Registrado com Sucesso!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Cliente não registrado. verifique os campos.'));
        }
        $this->set(compact('cliente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->carregarLayout();
        $cliente = $this->Clientes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $data = $this->request->getData();
            $regex = '/[^\d]/';
            $data['telefone'] = preg_replace($regex, '', $data['telefone']);
            $data['cep'] = preg_replace($regex, '', $data['cep']);
            $data['estado'] = strtoupper($data['estado']);

            $cliente = $this->Clientes->patchEntity($cliente, $data);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('Cliente "{0}" Salvo com Sucesso.', $data['nome']));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Cliente "{0}"" não foi salvo. Verifique os campos e tente novamente.', $data['nome']));
        }
        $this->set(compact('cliente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->carregarLayout();
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('O cliente {0} foi excluido com sucesso.', $cliente->nome));
        } else {
            $this->Flash->error(__('O cliente "{0}" não foi excluido.', $cliente->nome));
        }

        return $this->redirect(['action' => 'index']);
    }
}
