<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
use App\Models\Admin;
use App\Models\User;
use App\Models\Collaboration;
use App\Models\RequestResponse;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    
        Listing::create([
            'occupation'=>'Musician',
            'artist_name'=>'Diamond platnumz',
            'nationality'=>'Tanzanian',
            'gender'=>'Male',
            'contact'=>'+255768272955',
            'email'=>"diamondplatnumz@gmail.com",
            'brand'=>'Wasafi Classic Baby',
            'music_movie_type'=>'Bongo Flavor',
            'instagram'=>'diamond_platnumz',
            'twitter'=>'diamond_platnumz',
            'you_tube'=>'diamond_platnumz',
            'musician'=>'musician'
        ]);
        Listing::create([
            'occupation'=>'Musician',
            'artist_name'=>'Chris Brown',
            'nationality'=>'USA',
            'gender'=>'Male',
            'contact'=>'+87 986 275 123',
            'email'=>"chrisbreezy@gmail.com",
            'brand'=>'Chris Breezy',
            'music_movie_type'=>'Hip Hop / RnB',
            'instagram'=>'chris_brown_official',
            'twitter'=>'chris_brown_official',
            'you_tube'=>'chris_brown_official',
            'musician'=>'musician'
        ]);

        User::create([
            'name'=>'mosses',
            'email'=>'mosses608@gmail.com',
            'password'=>'1234567890'
        ]);

        User::create([
            'name'=>'mosses608',
            'password'=>'123456789'
        ]);

        Collaboration::create([
            'name'=>'Harmonize',
            'single'=>'Diamond Platnumz',
            'dfirst'=>'Ali Kiba',
            'dsecond'=>'Abdul Kiba',
            'tfirst'=>'Tanasha',
            'tsecond'=>'Zuchu',
            'tthird'=>'Billnass'
        ]);
        RequestResponse::create([
            'action'=>'1',
            'contact'=>'+255710066549',
            'email'=>'moddy@gmail.com',
            'name_accept'=>'Moddy',
            'request_accepted'=>'Aika',
            'name_reject'=>'',
            'request_rejected'=>'',
            'reason'=>''
        ]);
    }
}
