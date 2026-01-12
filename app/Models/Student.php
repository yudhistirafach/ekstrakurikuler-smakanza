<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'fullname',
        'class',
        'nis',
        'nisn',
        'gender'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function achievementStudent() {
        return $this->belongsTo(Achievement::class);
    }
}
