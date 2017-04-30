<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Section
 * @package App\Models
 * @version April 22, 2017, 6:01 am UTC
 */
class Section extends Model
{
    use SoftDeletes;

    protected $table = "section";

    public function getEnlace1()
    {
        if (!empty($this->enlace1title) and !empty($this->enlace1url)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function getEnlace2()
    {
        if (!empty($this->enlace2title) and !empty($this->enlace2url)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function getEnlace3()
    {
        if (!empty($this->enlace3title) and !empty($this->enlace3url)) {
            return true;
        }
        else {
            return false;
        }
    }


    public $fillable = [
        'mensaje',
        'titulo',
        'tipo',
        'imagen',
        'colorfondo',
        'showstatus',
        'enlace1title',
        'enlace2url',
        'enlace1url',
        'enlace2title',
        'enlace3title',
        'enlace3url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'mensaje' => 'string',
        'titulo' => 'string',
        'tipo' => 'string',
        'imagen' => 'string',
        'colorfondo' => 'string',
        'showstatus' => 'string',
        'enlace1title' => 'string',
        'enlace2url' => 'string',
        'enlace1url' => 'string',
        'enlace2title' => 'string',
        'enlace3title' => 'string',
        'enlace3url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'tipo' => 'required'
    ];

    
}
