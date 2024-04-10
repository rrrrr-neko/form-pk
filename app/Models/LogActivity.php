<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
   
    /**

     * Атрибуты, которые можно назначить массово.

     *

     * @var array

     */

     protected $fillable = [

        'subject', 'url', 'method', 'ip', 'agent', 'user_id'

    ];
}
