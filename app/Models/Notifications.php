<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Notifications extends Model
{
    use HasFactory,Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notifications';

}
