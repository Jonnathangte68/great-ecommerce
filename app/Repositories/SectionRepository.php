<?php

namespace App\Repositories;

use App\Models\Section;
use InfyOm\Generator\Common\BaseRepository;

class SectionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mensaje',
        'titulo',
        'tipo',
        'imagen',
        'colorfondo',
        'showestatus',
        'enlace1title',
        'enlace2url',
        'enlace1url',
        'enlace2title',
        'enlace3title',
        'enlace3url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Section::class;
    }
}
