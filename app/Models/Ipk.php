<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipk extends Model
{
    use HasFactory;

    // Specify the table name if different from the default "ipks"
    protected $table = 'ipk';

    // Define fillable columns to allow mass assignment
    protected $fillable = [
        'id_ipk',
        'nim',
        'semester',
        'tahun',
        'ips',
        'ipk',
    ];

    // Define the primary key if it's not 'id' (optional if 'id_ipk' is the primary key)
    protected $primaryKey = 'id_ipk';

    // If nim is a foreign key, define a relationship to the Mahasiswa model
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }
}
