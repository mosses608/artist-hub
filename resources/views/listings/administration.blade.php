@extends('admins.footer')
@include('admins.navigate')
@include('admins.search')
@extends('admins.paginate')


<x-scroll-card />
<x-admin-message-card />
@foreach($listings as $listing)
<div class="all-listings">
          <x-card> 
            <h2><a href="/listings/show/{{$listing->id}}">Artist Name: {{$listing->artist_name}}</a></h2>
            <p>Nationality: {{$listing->nationality}}</p>
            <p>Occupation: {{$listing->occupation}}</p>
            <p>Genre: {{$listing->music_movie_type}}</p>
            <p>Gender: {{$listing->gender}}</p>
            <br>
            <!--<p>Contact: {{$listing->contact}}</p>-->
            <div class="social_media">
                <a href="https://www.instagram.com/{{$listing->instagram}}"><img src="{{asset('images/instagram.png')}}" alt="Instagram"></a>
                <a href="https://www.twitter.com/{{$listing->twitter}}"><img src="{{asset('images/twitter.png')}}" alt="Twitter"></a>
                <a href="https://wa.me/{{$listing->contact}}"><img src="{{asset('images/whatsapp.png')}}" alt="Whatsapp"></a>
                <a href="https://www.youtube.com/{{$listing->you_tube}}"><img src="{{asset('images/youtube.png')}}" alt="Youtube"></a>
            </div><br>
            <p style="font-size:14px; background-color:#007BFF; width:40%; color:#FFFFFF; border-radius:10px; text-align:center;" class="created-in" id="created-in">{{$listing->artist_name}} posted this profile in {{$listing->created_at}}</p>
</x-card>
</div><br>
@endforeach








