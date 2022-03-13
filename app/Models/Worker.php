<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    
    protected $user_id;
    protected $fillable=[
        'expl','location','wage','date','activity'
    ];
    
    public function getUser() {
        return $this->belongsTo(User::class);
    }
}
