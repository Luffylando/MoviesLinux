<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
        //table name 
        protected $table = 'movies';

        //Primary Key
        public $primaryKey = 'id';
    
        //Timestamps 
        public $timestamps = true;
}
