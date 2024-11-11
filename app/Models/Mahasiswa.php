<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'mahasiswa';

    // Define the primary key if it's different from 'id'
    protected $primaryKey = 'nim';

    // Disable auto-incrementing, as 'nim' is not auto-incrementing
    public $incrementing = false;

    // Specify the primary key data type if it's not an integer
    protected $keyType = 'string';

    // Define fillable columns for mass assignment
    protected $fillable = [
        'nim',
        'nama',
    ];

    // Define the relationship with the Ipk model if needed
    public function ipk()
    {
        return $this->hasMany(Ipk::class, 'nim', 'nim');
    }
}
