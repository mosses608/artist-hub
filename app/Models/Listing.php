<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable=[
        'occupation',
        'artist_name',
        'nationality',
        'gender',
        'contact',
        'email',
        'brand',
        'music_movie_type',
        'instagram',
        'twitter',
        'you_tube',
        'musician',
        'director'
    ];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('artist_name' , 'like' , '%' . request('search') . '%');
        }
    }


    public static function find($id){
        $listings=self::all();

        foreach($listings as $listing){
            if($listing['id']==$id){
                return $listing;
            }
        }
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
