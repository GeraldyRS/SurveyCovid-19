<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class subject extends Model
{
    use Notifiable;
    protected $table = 'subject';
    protected $fillable = ['name','email'];
}
