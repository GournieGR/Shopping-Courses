<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Client;

class Course extends Model
{
    use HasFactory;

    protected $primarykey = 'id';

    protected $fillable = ['course', 'lessons', 'professor'];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
