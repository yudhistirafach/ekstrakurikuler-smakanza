<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = "coaches";

    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'nip'
    ];

    public function extracurriculars() {
        return $this->hasMany(Extracurricular::class);
    }

    public function achievements() {
        return $this->hasMany(Achievement::class);
    }
}
