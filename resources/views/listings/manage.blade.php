@include('partials.navigate')
@extends('partials.footer')
@extends('partials.paginate')
<button class="back_button"><a href="/">&#8592;</a></button>
<br>
<center>
    <div class="single_item_search">
        <form action="/listings/manage" method="GET" class="search_single_form">
            <input type="text" name="search" id="search" class="search" placeholder="Search an artist here" autocomplete="off">
            <button type="submit" class="submit">Search</button><br><br><br>
        </form>
    </div>
    <script>
        var searchInput=document.querySelector('.search');
        var submit_button=document.querySelector('.submit');

        submit_button.addEventListener('click', function(){
            const inputValue=searchInput.value;

            if(inputValue===""){
                alert('This field should not be empty!');
            }
        });
    </script>
</center>
<center>
@foreach($listings as $listing)
<div class="filter-single-listing">
       <p style="float:left; margin-left:5%;">{{$listing->artist_name}}</p><p class="collaborate" style="float:right;margin-right:5%; background-color:inherit;"><a href="/listings/collaboration/{{$listing->id}}">Collaborate</a></p><br><br>
</div><br>
@endforeach
</center>
<x-scroll-card />


<style>
    .collaborate{
        cursor: pointer;
        text-transform:uppercase;
    }
    .collaborate a{
        text-decoration:none;
        color:#000000;
    }
    .collaborate a:hover{
        color:#FFFFFF;
    }
    .filter-single-listing:hover{
        background-color:#555;
        cursor: pointer;
        color:#FFFFFF;
    }
    .filter-single-listing{
        border:1px solid #FFFFFF;
        width:100%;
        border-radius:20px;
        background-color:#FFFFFF;
        padding:10px;
    }
    .filter-single-listing p{
        font-size:18px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .single_item_search{
        padding:10px;
    }
    .single_item_search form input{
        padding:12px;
        background-color:#FFFFFF;
        color:#000000;
        width:60%;
        border:1px solid #999;
    }
    .single_item_search form button{
        padding:10px;
        float:right;
        margin-right:4%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:#38419D;
        border:1px solid #999;
        width:20%;
        color:#FFFFFF;
        cursor:pointer;
    }
    .single_item_search form button:hover{
        background-color:#0000FF;
        color:#FFFFFF;
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
        .active{
            display:block;
        }
</style>

<script>
    var hidden_form=document.querySelector('.collaborate-request-form');
    var unhide_button=document.querySelector('.collaborate');

    unhide_button.addEventListener('click', function(){
        hidden_form.classList.toggle('active');
    });
</script>