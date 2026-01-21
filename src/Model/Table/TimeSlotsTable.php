<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TimeSlots Model
 *
 * @property \App\Model\Table\ReservationsTable&\Cake\ORM\Association\HasMany $Reservations
 *
 * @method \App\Model\Entity\TimeSlot newEmptyEntity()
 * @method \App\Model\Entity\TimeSlot newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\TimeSlot> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TimeSlot get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\TimeSlot findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\TimeSlot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\TimeSlot> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TimeSlot|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\TimeSlot saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\TimeSlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TimeSlot>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\TimeSlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TimeSlot> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\TimeSlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TimeSlot>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\TimeSlot>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\TimeSlot> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TimeSlotsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('time_slots');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Reservations', [
            'foreignKey' => 'time_slot_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('label')
            ->maxLength('label', 50)
            ->requirePresence('label', 'create')
            ->notEmptyString('label');

        $validator
            ->time('start_time')
            ->requirePresence('start_time', 'create')
            ->notEmptyTime('start_time');

        $validator
            ->time('end_time')
            ->requirePresence('end_time', 'create')
            ->notEmptyTime('end_time');

        return $validator;
    }
}
