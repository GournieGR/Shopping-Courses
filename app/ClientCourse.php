<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCourse extends Model
{
    use HasFactory;
    
    public $table = 'client_course';

    protected $fillable = ['client_id', 'course_id'];
}
