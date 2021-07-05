<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Course;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $primarykey = 'id';

    protected $fillable = ['name', 'surname', 'email'];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
