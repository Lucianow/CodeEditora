<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
   //
    use Notifiable;

    protected $fillable = [
        'title',
        'subtitle',
        'price',
    ];

}
