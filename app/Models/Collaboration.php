<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'single',
        'dfirst',
        'dsecond',
        'tfirst',
        'tsecond',
        'tthird'
    ];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name' , 'like', '%' . request('search') . '%')
            ->orwhere('single' , 'like' , '%' . request('search') . '%')
            ->orwhere('dfirst' , 'like' , '%' . request('search') . '%')
            ->orwhere('dsecond' , 'like' , '%' . request('search') . '%')
            ->orwhere('tfirst' , 'like' , '%' . request('search') . '%')
            ->orwhere('tsecond' , 'like' , '%' . request('search') . '%')
            ->orwhere('tthird' , 'like' , '%' . request('search') . '%')
            ->orwhere('tthird' , 'like' , '%' . request('search') . '%');
        }
    }
}
