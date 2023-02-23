<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricalLogs extends Model
{
    use HasFactory;

    protected $fillable = ['ejex', 'ejey', 'bateria', 'ldr1', 'ldr2', 'ldr3', 'ldr4'];

}
