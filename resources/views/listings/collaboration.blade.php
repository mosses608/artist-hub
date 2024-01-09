@include('partials.navigate')
@extends('partials.footer')
<button class="back_button"><a href="/">&#8592;</a></button>
<br>
@foreach($listings as $listing)
@endforeach
<x-collaboration-request-card />
<center>
<div class="collaborate-request-form p-10 mt-4">
    <form action="/collaborations" method="POST">
        @csrf
        <p>Fill This Form To Collaborate</p><br>
        <label for="Me">My Name</label><br>
        <select name="name" id="">
                <option value="Choose">Choose</option>
                @foreach($listings as $listing)
                <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
                @endforeach
            </select>
        <!--<input type="text" name="name" id="" value="{{$listing->artist_name}}">--><br><br>
        <label for="Collaborate with">Select & Name artist to collaborate with</label><br>
        <select name="collaborate" id="" class="select">
            <option value="Choose">Choose</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br><br>
        <div class="single-selection" style="display:none;">
            <label for="">Select single artist to collaborate</label><br>
            <select name="single" id="">
                <option value="Choose">Choose</option>
                @foreach($listings as $listing)
                <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
                @endforeach
            </select>
            <!--<input type="text" name="single" id="" placeholder="Name the artist" value="{{old('single')}}">--><br>
            <br>
        </div>
        <div class="double-selection" style="display:none;">
            <label for="">Select two artists to collaborate</label><br>
            <select name="dfirst" id="">
                <option value="Choose">Choose</option>
                @foreach($listings as $listing)
                <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
                @endforeach
            </select>
            <!--<input type="text" name="dfirst" id="" placeholder="Name first artist" value="{{old('first')}}">--><br>
            <br>
            <select name="dsecond" id="">
                <option value="Choose">Choose</option>
                @foreach($listings as $listing)
                <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
                @endforeach
            </select>
            <!--<input type="text" name="dsecond" id="" placeholder="Name second artist" value="{{old('second')}}">--><br>
            <br>
        </div>
        <div class="tripple-selection" style="display:none;">
            <label for="">Select three artists to collaborate</label><br>
            <select name="tfirst" id="">
                <option value="Choose">Choose</option>
                @foreach($listings as $listing)
                <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
                @endforeach
            </select>
            <!--<input type="text" name="tfirst" id="" placeholder="Name first artist" value="{{old('tfirst')}}">--><br>
            <br>
            <select name="tsecond" id="">
                <option value="Choose">Choose</option>
                @foreach($listings as $listing)
                <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
                @endforeach
            </select>
            <!--<input type="text" name="tsecond" id="" placeholder="Name second artist" value="{{old('tsecond')}}">--><br>
            <br>
            <select name="tsecond" id="">
                <option value="Choose">Choose</option>
                @foreach($listings as $listing)
                <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
                @endforeach
            </select>
            <!--<input type="text" name="tthird" id="" placeholder="Name third artist" value="{{old('tthird')}}">--><br>
            <br>
        </div>
        <button type="submit">Collaborate</button><br><br>
    </form>
</div><br><br><br><br><br>

<script>
    var select=document.querySelector('.select');
    var single_selection=document.querySelector('.single-selection');
    var double_selection=document.querySelector('.double-selection');
    var tripple_selection=document.querySelector('.tripple-selection');

    select.addEventListener('change', function(){
        const selectedValue=select.value;

        single_selection.style.display='none';
        double_selection.style.display='none';
        tripple_selection.style.display='none';

        if(selectedValue==='1'){
            single_selection.style.display='block';
        }else if(selectedValue==='2'){
            double_selection.style.display='block';
        }else if(selectedValue==='3'){
            tripple_selection.style.display='block';
        }
    });
</script>

</center>


<style>
    .collaborate-request-form form span{
        color:red;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:14px;
        font-style:italic;
        float:left;
        margin-left:4%;
    }
    .collaborate-request-form form input,select{
        width:95%;
        padding:10px;
    }
    .collaborate-request-form form button{
        padding:10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border:none;
        background-color:#007bFF;
        color:#FFFFFF;
        cursor: pointer;
        width:120px;
    }
    .collaborate-request-form{
        background-color:#FFFFFF;
        width:80%;
    }
    .collaborate-request-form form label{
        float:left;
        margin-left:3%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:16px;
    }
    .collaborate-request-form p{
        background-color:green;
        color:#FFFFFF;
        padding:10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .back_button a{
            font-size:40px;
            color:#FF0000;
            text-decoration:none;
        }
        .back_button{
            float:left;
            padding:10px;
            background-color:inherit;
            border:none;
        }
        .back_button a:hover{
            color:#000000;
        }
</style>