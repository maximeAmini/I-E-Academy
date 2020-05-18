<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $fillable = ['contenu','statut'];
}
