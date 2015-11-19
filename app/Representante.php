<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'representantes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'endereco', 'telefone1', 'telefone2', 'areaDeRepresentacao'];

}
