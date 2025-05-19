<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provincia extends Model
{
    use SoftDeletes;
    
    /**
     * Indicates if the models ID is auto-incrementing. 
     * @var bool
    */
    public $incrementing = true;

    /**
     * The primaty key associated with the table.
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = 'provincias';


     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nombre',
        'codigo'
    ];
}
