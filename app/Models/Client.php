<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table='client';
    protected $primarykey= 'id_client';
    protected $fillable = ['nama_client', 'ip_client', 'status'];
}
