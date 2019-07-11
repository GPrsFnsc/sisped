<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class pedido
 * @package App\Models
 * @version July 11, 2019, 12:20 am UTC
 *
 * @property \App\Models\Produto idProd
 * @property integer id_prod
 * @property string dt_ped
 * @property string solicitante
 * @property string despachante
 * @property string cep
 * @property string uf
 * @property string municipio
 * @property string bairro
 * @property string rua
 * @property integer numero
 * @property string sit_ped
 */
class pedido extends Model
{
    use SoftDeletes;

    public $table = 'pedido';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_prod' => 'integer',
        'dt_ped' => 'date',
        'solicitante' => 'string',
        'despachante' => 'string',
        'cep' => 'string',
        'uf' => 'string',
        'municipio' => 'string',
        'bairro' => 'string',
        'rua' => 'string',
        'numero' => 'integer',
        'sit_ped' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => ''
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idProd()
    {
        $teste = $this->belongsTo(\App\Models\Produto::class, 'id_prod');
        return $teste;
    }
    
    public function produto(){
        
        $produtos = DB::table('produto')->get();

            foreach ($produtos as $prod)
            {
                $teste = $prod->nome_prod;
                $valor = $prod->val_prod;
                $quant = $prod->qtdest_prod;
            }
    }
}
