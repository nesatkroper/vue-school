<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'stu_id';

    protected $fillable = [
        'photo',
        'fname',
        'lname',
        'gender',
        'dob',
        'email',
        'phone',
        'address',
        'enrollment',
        'cou_id',
        'status',
        'isDelete',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
