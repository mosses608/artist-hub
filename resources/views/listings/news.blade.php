@include('partials.navigate')
@extends('partials.footer')
<button type="button" class="back_button"><a href="/">&#8592;</a></button><br>
@foreach($listings as $listing)

@endforeach
<center>
    <form action="/messages" method="POST" class="news_submission">
        @csrf
        <p>Post news to the audience</p><br>
        <label for="">Your Name</label><br>
        <select name="name" id="" class="select">
            <option value="Choose">Choose</option>
            @foreach($listings as $listing)
            <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
            @endforeach
        </select>
        <!--<input type="text" name="name" id="" value="{{$listing->artist_name}}" placeholder="Enter your name" autocomplete="off">--><br>
        @error('name')
        <span>Your name is required</span>
        @enderror
        <br>
        <label for="">Message/News</label><br>
        <textarea name="message" id="" value="{{old('message')}}" placeholder="Type a message here" autocomplete="off"></textarea><br>
        @error('message')
        <span>Message is required</span>
        @enderror
        <br>
        <button type="submit">Post</button><br><br>
    </form><br><br>
</center>
<br><br><br>
<x-news-flash />
<style>
    .news_submission span{
        color:red;
        float:left;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-left:3%;
        font-size:12px;
        font-style:italic;
    }
    .news_submission{
        background-color:#FFFFFF;
        width:80%;
    }
    .news_submission p{
        background-color:green;
        padding:10px;
        width:100%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:18px;
        font-weight:200;
        color:#FFFFFF;
    }
    .news_submission input,textarea,select{
        width:95%;
        padding:10px;
    }
    .news_submission label{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        float:left;
        margin-left:3%;
    }
    .news_submission button{
        padding:10px;
        width:100px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border:none;
        background-color:green;
        cursor: pointer;
        color:#FFFFFF;
    }
    .back_button a{
        text-decoration:none;
        background-color:orange;
        padding:10px;
        font-size:30px;
        width:50px;
        }
        .back_button{
            position:fixed;
            left:0%;
            top:10%;
            color:#000000;
            border:none;
        }
</style>

<script>
    const textSlider=document.querySelectorAll('.automatic-news-slider p');
    const intervalTime=2000;
    let initialMessage=0;

    function showNextMessagePosted(){
        textSlider[initialMessage].style.display='none';
        initialMessage++;

        if(initialMessage>=textSlider.length){
            initialMessage=0;
        }
        showNextMessagePosted(initialMessage);
    }
    setInterval(showNextMessagePosted,intervalTime);
</script>
