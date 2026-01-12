<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = "achievements";

    public $timestamps = true;

    protected $fillable = [
        'extracurricular_id',
        'coach_id',
        'title',
        'slug',
        'excerpt',
        'description',
        'level',
        'year',
        'rank',
        'medal',
        'event_date',
        'is_published',
        'image_url',
    ];

    public function extracurricular() {
        return $this->belongsTo(Extracurricular::class);
    }

    public function coach() {
        return $this->belongsTo(Coach::class);
    }

    public function students(){
        return $this->belongsToMany(
            Student::class,
            'achievement_students',
            'achievement_id',
            'student_id'
        )->withTimestamps();
    }
}
