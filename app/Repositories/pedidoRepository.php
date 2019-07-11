<?php

namespace App\Repositories;

use App\Models\pedido;
use App\Repositories\BaseRepository;

/**
 * Class pedidoRepository
 * @package App\Repositories
 * @version July 11, 2019, 12:20 am UTC
*/

class pedidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_prod',
        'dt_ped',
        'solicitante',
        'despachante',
        'cep',
        'uf',
        'municipio',
        'bairro',
        'rua',
        'numero',
        'sit_ped'
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
        return pedido::class;
    }
}
