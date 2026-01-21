<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TimeSlots Controller
 *
 * @property \App\Model\Table\TimeSlotsTable $TimeSlots
 */
class TimeSlotsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
  public function index()
{
    $timeSlots = $this->TimeSlots->find()->all();
    $this->set(compact('timeSlots'));
}


    /**
     * View method
     *
     * @param string|null $id Time Slot id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timeSlot = $this->TimeSlots->get($id, contain: ['Reservations']);
        $this->set(compact('timeSlot'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timeSlot = $this->TimeSlots->newEmptyEntity();
        if ($this->request->is('post')) {
            $timeSlot = $this->TimeSlots->patchEntity($timeSlot, $this->request->getData());
            if ($this->TimeSlots->save($timeSlot)) {
                $this->Flash->success(__('The time slot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The time slot could not be saved. Please, try again.'));
        }
        $this->set(compact('timeSlot'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Time Slot id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timeSlot = $this->TimeSlots->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timeSlot = $this->TimeSlots->patchEntity($timeSlot, $this->request->getData());
            if ($this->TimeSlots->save($timeSlot)) {
                $this->Flash->success(__('The time slot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The time slot could not be saved. Please, try again.'));
        }
        $this->set(compact('timeSlot'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Time Slot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timeSlot = $this->TimeSlots->get($id);
        if ($this->TimeSlots->delete($timeSlot)) {
            $this->Flash->success(__('The time slot has been deleted.'));
        } else {
            $this->Flash->error(__('The time slot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
