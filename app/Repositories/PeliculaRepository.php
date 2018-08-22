<?php

namespace App\Repositories;

use App\Models\Pelicula;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PeliculaRepository
 * @package App\Repositories
 * @version August 22, 2018, 7:06 pm UTC
 *
 * @method Pelicula findWithoutFail($id, $columns = ['*'])
 * @method Pelicula find($id, $columns = ['*'])
 * @method Pelicula first($columns = ['*'])
*/
class PeliculaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pelicula::class;
    }
}
