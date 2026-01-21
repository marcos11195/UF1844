<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reservations Controller
 *
 * @property \App\Model\Table\ReservationsTable $Reservations
 */
class ReservationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
   public function index()
{
    $userId = $this->request->getSession()->read('Auth.id');

    $query = $this->Reservations->find()
        ->where(['Reservations.user_id' => $userId])
        ->contain(['Users', 'Tables', 'TimeSlots']);

    $reservations = $this->paginate($query);

    $this->set(compact('reservations'));
}


    /**
     * View method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reservation = $this->Reservations->get($id, contain: ['Users', 'Tables', 'TimeSlots']);
        $this->set(compact('reservation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
public function add()
{
    $reservation = $this->Reservations->newEmptyEntity();

    if ($this->request->is('post')) {

        $data = $this->request->getData();
        $data['user_id'] = $this->request->getSession()->read('Auth.id');

        $reservation = $this->Reservations->patchEntity($reservation, $data);

        if ($this->Reservations->save($reservation)) {
            $this->Flash->success('Reserva creada correctamente.');
            return $this->redirect(['action' => 'index']);
        }

        // MENSAJE ÚNICO Y CLARO
        $this->Flash->error('La mesa ya está reservada en ese horario.');
    }

    $tables = $this->Reservations->Tables->find('list')->all();
    $timeSlots = $this->Reservations->TimeSlots->find('list')->all();

    $this->set(compact('reservation', 'tables', 'timeSlots'));
}



    /**
     * Edit method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reservation = $this->Reservations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reservation = $this->Reservations->patchEntity($reservation, $this->request->getData());
            if ($this->Reservations->save($reservation)) {
                $this->Flash->success(__('The reservation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reservation could not be saved. Please, try again.'));
        }
        $users = $this->Reservations->Users->find('list', limit: 200)->all();
        $tables = $this->Reservations->Tables->find('list', limit: 200)->all();
        $timeSlots = $this->Reservations->TimeSlots->find('list', limit: 200)->all();
        $this->set(compact('reservation', 'users', 'tables', 'timeSlots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reservation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
   public function delete($id = null)
{
    $this->request->allowMethod(['post', 'delete']);

    $userId = $this->request->getSession()->read('Auth.id');

    $reservation = $this->Reservations->find()
        ->where([
            'Reservations.id' => $id,
            'Reservations.user_id' => $userId
        ])
        ->firstOrFail();

    if ($this->Reservations->delete($reservation)) {
        $this->Flash->success('Reserva eliminada correctamente.');
    } else {
        $this->Flash->error('No se pudo eliminar la reserva.');
    }

    return $this->redirect(['action' => 'index']);
}

}
