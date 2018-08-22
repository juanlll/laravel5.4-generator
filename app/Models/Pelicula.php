<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pelicula
 * @package App\Models
 * @version August 22, 2018, 7:06 pm UTC
 *
 * @property string titulo
 * @property string descripcion
 */
class Pelicula extends Model
{
    use SoftDeletes;

    public $table = 'peliculas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'titulo' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
