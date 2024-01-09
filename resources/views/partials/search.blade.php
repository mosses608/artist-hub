
<center>
    <div class="single_item_search">
    <center><marquee behavior="smooth" direction="left"  class="heading"><h1>{{$heading}}</h1></marquee></center>

        <form action="/" method="GET" class="search_single_form">
            <input type="text" name="search" id="search" class="search" placeholder="Search an artist here" autocomplete="on">
            <button type="submit" class="submit">Search</button><br><br><br>
            @auth
                <p class="profile_name" style="text-align:center;margin-top:-2%;color:#FF0000;padding:0px;">Welcome, {{auth()->user()->name}}</p>
                @endauth
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
<style>
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
    .all_listings{
        background-color:#FFFFFF;
        background-size:cover;
        padding:6px;
        width:50%;
        border:2px solid #3B3486;
        float:left;
        display:inline;
        
    }
    .all_listings:hover{
        background-color:#666;
        color:#FFFFFF;
        cursor: pointer;
    }
    .all_listings p,h2,img{
        padding:4px;
    }
    .all_listings .profile{
        width:60px;
        height:60px;
        border-radius:20px;
    }
    .all_listings h2,a{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight:400;
        text-decoration:none;
    }
    .all_listings p{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .social_media img{
        width:50px;
        border-radius:10px;
        border:1px solid #333;
        margin-left:0px;
        padding:0px;
        height:50px;
    }
    .created-in:hover{
        background-color:orange;
        opacity: 0.5;
    }
    @media(max-width:768px){
        .social_media img{
            width:40px;
            height:40px;
        }
        .name{
            font-size:18px;
        }
        .all_listings{
            padding:2px;
        }
    }
</style>