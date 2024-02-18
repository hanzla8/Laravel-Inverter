<?php

namespace App\Models;

use App\Models\AppointmentTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppointmentTable extends Model
{

    protected $table = 'appointment_tables';

    use HasFactory;

    protected $fillable =
    [
        'name',
        'tel',
        'email',
    ];
}
