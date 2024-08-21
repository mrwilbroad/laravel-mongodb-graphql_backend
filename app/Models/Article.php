<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Article extends Model
{


    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'history';


    protected $primaryKey = '_id';
    protected $keyType = 'string';


   protected $fillable = [
    'id',
    'fname',
    'lname',
    'email',
    'gender',
    'ip_address',
   ];



    
}
