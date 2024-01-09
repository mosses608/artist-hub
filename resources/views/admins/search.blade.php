<button class="back-button"><a href="/">&#8592;</a></button>
<center>
    <div class="single_item_search">
        <form action="/listings/administration" method="GET" class="search_single_form">
            <input type="text" name="search" id="search" class="search" placeholder="Search an artist here" autocomplete="off">
            <button type="submit" class="submit">Search</button><br><br>
        </form>
        <p class="admins-dashboard">Admins Dashboard</p>
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
    .admins-dashboard{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:20px;
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
    .all_listings{
        background-color:#FFFFFF;
        background-size:cover;
        padding:10px;
        width:100%;
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
        width:60px;
        border-radius:10px;
        border:1px solid #333;
        padding:0px;
        height:60px;
    }
    .created-in:hover{
        background-color:orange;
        opacity: 0.5;
    }
</style>