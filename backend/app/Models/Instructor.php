<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $primaryKey = 'ins_id';

    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'dob',
        'email',
        'phone',
        'address',
        'hire_date',
        'dep_id',
        'status',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
