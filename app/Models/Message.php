<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'message'
    ];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('created_at', 'like', '%' . request('search') . '%')
                  ->orwhere('name' , 'like' , '%' . request('search') . '%');
        }
    }
}
