<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Artists || Hub</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="all_body" >
        @section('content') 
        @include('partials.navigate')
        @include('partials.search')
        @if(count($listings)==0)
        <center><p class="no_listings" style="color:#FF0000;">
            Sorry!,not data found.
        </p></center>
        @endif

        @extends('partials.footer')
        @extends('partials.paginate')
        @foreach($listings as $listing)
        <x-listing-card :listing="$listing" />
        @endforeach
        <x-flash-message />
        <x-scroll-card />
    </body>
</html>
