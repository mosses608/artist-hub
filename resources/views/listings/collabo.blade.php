@include('admins.navigate')
@extends('admins.footer')
<x-scroll-card />
<button class="back-button"><a href="/">&#8592;</a></button>
<center>
    <div class="single_item_search">
        <form action="/listings/collaboration" method="GET" class="search_single_form">
            <input type="text" name="search" id="search" class="search" placeholder="Search an artist's collaboration request by name or date(yy-mm-dd)" autocomplete="off">
            <button type="submit" class="submit">Search</button><br><br>
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

    @if(count($collaborations)==0)
    <p class="no-data">Sorry!, no data yet posted</p>
    @endif
    @foreach($collaborations as $collabo)
    <div class="all-collaboration-requests">
        <p>Requesting Artist : {{$collabo->name}}</p><br>
        <p>Collaborating Artist(s) : {{$collabo->single}}, {{$collabo->dfirst}}, {{$collabo->dsecond}}, {{$collabo->tfirst}}, {{$collabo->tsecond}}, {{$collabo->tthird}}</p><br>
        <p class="posted-in">Posted at : {{$collabo->created_at}}</p>
    </div><br>
    @endforeach
<br>
<div class="paginate">
    {{$collaborations->links()}}
</div><br><br><br><br>
<style>
    .paginate span,a{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .posted-in{
        background-color:#007bFF;
        font-size:16px;
        width:30%;
        padding:4px;
        color:#FFFFFF;
    }
    .all-collaboration-requests{
        background-color:#FFFFFF;
        width:100%;
    }
    .all-collaboration-requests p{
        padding:10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .single_item_search{
        padding:10px;
    }
    .single_item_search form input{
        padding:12px;
        background-color:#FFFFFF;
        color:#000000;
        width:70%;
        border:1px solid #999;
    }
    .no-data{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:16px;
    }
    .single_item_search form button{
        padding:10px;
        float:right;
        margin-right:4%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:#999;
        border:1px solid #999;
        width:20%;
        color:#FFFFFF;
        cursor:pointer;
    }
    .single_item_search form button:hover{
        background-color:#0000FF;
        color:#FFFFFF;
    }
    .back-button a{
        padding:10px;
        text-decoration:none;
        background-color:inherit;
        font-size:50px;
    }
    .back-button{
        float:left;
        background-color:inherit;
        border:none;
    }
</style>