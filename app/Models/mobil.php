<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'created_by',
        'create_date',
        'price'
    ];

    public function creator(){
        return $this->belongsTo(User::class,'created_by','id');
    }
}
