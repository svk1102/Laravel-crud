<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Table name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timeStamps = true ;

}
