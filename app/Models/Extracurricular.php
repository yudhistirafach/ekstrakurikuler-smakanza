<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    protected $table = "extracurriculars";

    public $timestamps = true;

    protected $fillable = [
        'coach_id',
        'name',
        'description',
        'quota',
        'day',
        'start_time',
        'end_time', 
        'location',
        'image_url',
    ];

    public function coach() {
        return $this->belongsTo(Coach::class);
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function achievements() {
        return $this->hasMany(Achievement::class);
    }
}
