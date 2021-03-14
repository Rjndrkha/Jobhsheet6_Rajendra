<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> f0dc6f0e2b9b981c91a9c05e4d8ab0992ea293ca
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
    protected $table = ‘my_posts’;
    protected $primaryKey = ‘my_id’;
    protected $keyType = ‘string’;
    public $incrementing = false;
=======
    use HasFactory;
>>>>>>> f0dc6f0e2b9b981c91a9c05e4d8ab0992ea293ca
}
