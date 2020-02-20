<?php

namespace App\Repositories;

use App\Models\inventory;
use App\Repositories\BaseRepository;

/**
 * Class inventoryRepository
 * @package App\Repositories
 * @version December 20, 2019, 10:37 pm UTC
*/

class inventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type',
        'category',
        'company',
        'date_of_entry',
        'warranty',
        'image',
        'qty'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return inventory::class;
    }
}
