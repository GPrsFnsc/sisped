<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class sisped
 * @package App\Models
 * @version July 9, 2019, 11:34 am UTC
 *
 * @property string nome_prod
 * @property integer val_prod
 * @property integer qtdest_prod
 * @property boolean sit_prod
 */
class sisped extends Model
{
    // use SoftDeletes;

    public $table = 'produto';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    // const DELETED_AT = 'deleted_at';/


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome_prod',
        'val_prod',
        'qtdest_prod',
        'sit_prod'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome_prod' => 'string',
        'val_prod' => 'integer',
        'qtdest_prod' => 'integer'
            
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => '',
        'nome_prod' => 'required',
        'val_prod' => 'required',
        'qtdest_prod' => 'required',
        'sit_prod' => ''
    ];

    
}
