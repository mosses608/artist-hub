@include('partials.navigate')
@extends('partials.footer')
<button type="button" class="back_button"><a href="/">&#8592;</a></button><br><br>
<center>
    <div class="single_item_search">
        <form action="/listings/updates" method="GET" class="search_single_form">
            <input type="text" name="search" id="search" class="search" placeholder="Enter date(yy-mm-dd) or name to view artist's updates" autocomplete="off">
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
    @if(count($messages)==0)
    <center><p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:red;">No updates posted yet</p></center>
    @endif
    @foreach($messages as $message)
    <div class="automatic-news-slider">
       <p style="font-size:18px; color:green;" class="user-updated">{{$message->name}}</p>
        <marquee behavior="smooth" direction="left"><p class="name">->"{{$message->message}}"<br></p></marquee> <span style="padding:2px;color:#0000FF;float:left;font-size:12px;">posted at {{$message->created_at}}</span><br><br>
        </div><br>
    @endforeach

</center>
<div class="paginate-updates">
    {{$messages->links()}}
</div>
<x-scroll-card />
<style>
    .user-updated{
        float:left;
    }
    .paginate-updates{
        margin-bottom:10%;
    }
    .paginate-updates a,span{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        .name:hover{
            color:orange;
            font-style:italic;
    }
    .automatic-news-slider{
        padding:10px;
        width:80%;
        cursor: pointer;
        border-radius:10px;
        background-color:#FFFFFF;
    }
    .automatic-news-slider p{
        color:#0000FF;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    @media(max-width:768px){
        .paginate-updates{
            margin-bottom:20%;
        }
    }
</style>