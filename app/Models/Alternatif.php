<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kode',
        'nama',
        'integrity',
        'communication',
        'dependability',
        'problem_solving',
        'quality_of_work',
        'technical_skills',
        'creativity',
        'adaptability',
        'productivity',
        'attendance',
    ];
}
