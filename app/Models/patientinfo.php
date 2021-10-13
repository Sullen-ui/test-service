<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientinfo extends Model
{
    use HasFactory;

    protected $fillable = ['sname','name', 'lname', 'gender','bdate','phone','snils','document','dserial','dnumber'];

    public function visit()
    {
        return $this->hasMany(Visit::class, 'id_patient', 'id');
    }
}
