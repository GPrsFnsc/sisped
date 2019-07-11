<?php

namespace App\Repositories;

use App\Models\sisped;
use App\Repositories\BaseRepository;

/**
 * Class sispedRepository
 * @package App\Repositories
 * @version July 9, 2019, 11:34 am UTC
*/

class sispedRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_prod',
        'nome_prod',
        'val_prod',
        'qtdest_prod',
        'sit_prod'
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
        return sisped::class;
    }
}
