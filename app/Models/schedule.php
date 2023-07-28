<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';
    protected $fillable = [
        'event_title',
        'start_date_time',
        'duration',
        'room',
        'add_info',
        'pic_name',
        'pic_contact_number'
    ];

}