<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* Mass insert values in the database table.*/
	protected $fillable = ['title', 'body','author'];

}
