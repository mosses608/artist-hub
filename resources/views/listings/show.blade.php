@include('partials.navigate')
@extends('partials.footer')<br>
<center>
<button type="button" class="back_button"><a href="/">&#8592;</a></button>
<button type="button" class="response-button">View Requests</button>
<button type="button" class="view-response">View Responses</button><br><br><br>
    <div class="profile_picture">
    <img src="{{$listing->profile ? asset('storage/' . $listing->profile) : asset('/images/user.png')}}" alt="Profile"><br>
        <h2 class="welcome">{{$listing->artist_name}}'s Profile</h2><br>
</div></center>
    <div class="single-listing-data" id="single-listing-dat">
            <p>Genre: {{$listing->music_movie_type}}</p>
            <p>Gender: {{$listing->gender}}</p>
            <p>Brand: {{$listing->brand}}</p>
            <p>Nationality: {{$listing->nationality}}</p>
            <p>Occupation: {{$listing->occupation}}</p>
            <br>
            <div class="social_media">
                <a href="https://www.instagram.com/{{$listing->instagram}}"><img src="{{asset('images/instagram.png')}}" alt="Instagram"></a>
                <a href="https://www.twitter.com/{{$listing->twitter}}"><img src="{{asset('images/twitter.png')}}" alt="Twitter"></a>
                <a href="https://wa.me/{{$listing->contact}}"><img src="{{asset('images/whatsapp.png')}}" alt="Whatsapp"></a>
                <a href="https://www.youtube.com/{{$listing->you_tube}}"><img src="{{asset('images/youtube.png')}}" alt="Youtube"></a>
            </div>
    </div><br>
    <center>

    <!--VIEW COLLABORATION REQUEST-->
    <div class="collaboration-request-components">
    <button class="disappear" onclick="close()">Close</button><br><br>
        @if(count($collaborations)==0)

        <p>You have not get any collaboration request here!</p>
        
        @endif
        
    @foreach($collaborations as $collabo)

    @if($collabo->single == $listing->artist_name)

    <p><---- 'Hey <span>{{$listing->artist_name}}</span>, <em>{{$collabo->name}}</em> sent you a colaboration request at <em>{{$collabo->created_at}}</em>, would you like to consult if possible?', Click <a href="/listings/reply" class="reply" style="color:#FF00FF;">reply</a> to reply <em>{{$collabo->name}}'s</em> request</p>

    @elseif($collabo->dfirst == $listing->artist_name)

    <p><---- 'Hey <span>{{$listing->artist_name}}</span>, <em>{{$collabo->name}}</em> sent you a colaboration request at <em>{{$collabo->created_at}}, would you like to consult if possible?', Click <a href="/listings/reply" class="reply" style="color:#FF00FF;">reply</a> to reply <em>{{$collabo->name}}'s</em> request</em></p>

    @elseif($collabo->dsecond == $listing->artist_name)

    <p><---- 'Hey <span>{{$listing->artist_name}}</span>, <em>{{$collabo->name}}</em> sent you a colaboration request at <em>{{$collabo->created_at}}, would you like to consult if possible?', Click <a href="/listings/reply" class="reply" style="color:#FF00FF;">reply</a> to reply <em>{{$collabo->name}}'s</em> request</em></p>

    @elseif($collabo->tfirst == $listing->artist_name)

    <p><---- 'Hey <span>{{$listing->artist_name}}</span>, <em>{{$collabo->name}}</em> sent you a colaboration request at <em>{{$collabo->created_at}}, would you like to consult if possible?', Click <a href="/listings/reply" class="reply" style="color:#FF00FF;">reply</a> to reply <em>{{$collabo->name}}'s</em> request</em></p>

    @elseif($collabo->tsecond == $listing->artist_name)

    <p><---- 'Hey <span>{{$listing->artist_name}}</span>, <em>{{$collabo->name}}</em> sent you a colaboration request at <em>{{$collabo->created_at}}, would you like to consult if possible?', Click <a href="/listings/reply" class="reply" style="color:#FF00FF;">reply</a> to reply <em>{{$collabo->name}}'s</em> request</em></p>

    @elseif($collabo->tthird == $listing->artist_name)

    <p><---- 'Hey <span>{{$listing->artist_name}}</span>, <em>{{$collabo->name}}</em> sent you a colaboration request at <em>{{$collabo->created_at}}, would you like to consult if possible?', Click <a href="/listings/reply" class="reply" style="color:#FF00FF;">reply</a> to reply <em>{{$collabo->name}}'s</em> request</em></p>

    @endif

    @endforeach

    <br><br>
    <div class="paginate">
    {{$collaborations->links()}}
    </div>
    </div>
<button type="button" class="back_button"><a href="/">&#8592;</a></button>
<br>

<!--VIEW COLLABORATION ACCEPTANCE AND REJECTIONS -->
<div class="collaboration-acceptance-rejection mt-10 p-4">
    <button class="collapse">Close</button><br><br>
    @foreach($responses as $response)

    @if($response->action == '1' && $response->request_accepted == $listing->artist_name)
    <p>Hello <span>{{$response->request_accepted}}</span>, <em>{{$response->name_accept}}</em> accepted your collaboration request at <span>{{$response->created_at}}</span>. Communicate with <span>{{$response->name_accept}}</span> using phone number <em>{{$response->contact}}</em> for fully conversation.</p><br><br>
    @elseif($response->action == '2' && $response->request_rejected == $listing->artist_name)
    <p>Hello <span>{{$response->request_rejected}}</span>, {{$response->name_reject}} rejected your collaboration request <span>{{$response->created_at}}</span>, with a stated reason <span>'{{$response->reason}}'</span></p><br><br>
    @else
    @endif
    @endforeach

<div class="paginate">
    {{$responses->links()}}
</div>
</div>

<style>
    .view-response{
        float:right;
        padding:10px;
        background-color:green;
        cursor: pointer;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color:#ddd;
        margin-right:1%;
        font-size:14px;
        border:none;
    }
    .view-response:hover{
        color:#FFFFFF;
        background-color:#0000FF;
    }
    .collaboration-acceptance-rejection{
        background-color:#444;
        width:60%;
        display:none;
        height:400px;
        position:absolute;
        top:20%;
        left:20%;
        overflow-y: scroll;
        padding:10px;
    }
    .collaboration-acceptance-rejection p{
        color:#FFFFFF;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .collaboration-acceptance-rejection .collapse{
        padding:10px;
        width:100%;
        background-color:red;
        border:none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        cursor: pointer;
        color:#000000;
        font-size:16px;
    }
    .collaboration-acceptance-rejection span{
        color:#00FF00;
    }
    .collaboration-acceptance-rejection em{
        color:#FF00FF;
    }
    .disappear{
        cursor: pointer;
        padding:10px;
        border:none;
        width:100%;
        background-color:red;
        font-size:16px;
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
        .active{
            display:block;
        }
</style>

<!-- VIEW REQUEST -->
<script>
    const closeButton=document.querySelector('.disappear');
    const containerDataHolder=document.querySelector('.collaboration-request-components');


    closeButton.addEventListener('click', function(){
        containerDataHolder.style.display='none';
    });
</script>

<!-- VIEW RESPONSE-->
<script>
    const viewReponseButton=document.querySelector('.view-response');
    const holderClass=document.querySelector('.collaboration-acceptance-rejection');
    const closeContentsButton=document.querySelector('.collapse');

    viewReponseButton.addEventListener('click', function(){
        holderClass.classList.toggle('active');
    });

    closeContentsButton.addEventListener('click', function(){
        holderClass.style.display='none';
    });
</script>



    <style>
        .paginate span,a{
            color:#FFFFFF;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .single-listing-data p{
            padding:10px;
            display:block;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .single-listing-data{
            padding:6px;
            cursor: pointer;
            width:100%;
            background-color:#FFFFFF;
        }
        .single-listing-data:hover{
            color:#FFFFFF;
            background-color:#444;
        }
        .response-button{
            float:right;
            padding:10px;
            background-color:#007BFF;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color:#000000;
            margin-right:1%;
            font-size:14px;
            border:none;
        }
        .response-button:hover{
            color:#FFFFFF;
            background-color:#222;
        }
        .collaboration-request-components{
            background-color:#444;
            border-radius:10px;
            width:60%;
            height:400px;
            padding:10px;
            display:none;
            position:absolute;
            overflow-y: scroll;
            left:20%;
            top:15%;
        }
        .collaboration-request-components span,em{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .collaboration-request-components span{
            color:#FF00FF;
        }
        .collaboration-request-components em{
            color:#FF0000;
        }
        .collaboration-request-components p{
            font-style:italic;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color:#FFFFFF;
        }
        .profile_picture img{
            width:70px;
            height:70px;
            border-radius:10rem;
            border:2px solid #FFFFFF;
        }
        .welcome{
            font-weight:400;
            color:#000000;
            text-align:center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .welcome:hover{
            color:#0000FF;
            cursor: pointer;
        }
        .social_media{
            left:35%;
        }
        .social_media img{
            width:60px;
            border-radius:10px;
            height:60px;
            border:1px solid #000000;
            padding :0px;
        }
        .post_class button{
            font-size:18px;
            color:#000000;
            cursor: pointer;
            text-transform:uppercase;
            border:none;
            padding:10px;
        }
        .post_class button a{
            color:#FFFFFF;
            text-decoration:none;
        }
        .post_class .postV a{
            color:#00FF00;
            text-decoration:none;
        }
        .post_class{
            position: fixed;
            bottom:14%;
        }
        .post_class .postV{;
            background-color:blue;
            right:10%;
        }
        .post_class .postN{
            background-color:green;
            left:10%;
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
        .active{
            display:block;
        }
    </style>
    <center>
        <br><br>
    <!--<div class="social_media">
                <a href="https://www.instagram.com/{{$listing->instagram}}"><img src="{{asset('images/instagram.png')}}" alt="Instagram"></a>
                <a href="https://www.twitter.com/{{$listing->twitter}}"><img src="{{asset('images/twitter.png')}}" alt="Twitter"></a>
                <a href="https://wa.me/{{$listing->contact}}"><img src="{{asset('images/whatsapp.png')}}" alt="Whatsapp"></a>
                <a href="https://www.youtube.com/{{$listing->you_tube}}"><img src="{{asset('images/youtube.png')}}" alt="Youtube"></a>
            </div>-->
            <div class="post_class">
            <button class="postN"><a href="/listings/news/{{$listing->id}}">Post News</a></button><button class="postV"><a href="#">Post Video</a></button>
            </div>
            <br><br><br><br><br><br><br><br><br>
</center>

<script>
    const responsebutton=document.querySelector('.response-button');
    const containerDataHoler=document.querySelector('.collaboration-request-components');

    responsebutton.addEventListener('click', function(){
        containerDataHoler.classList.toggle('active');
    });
</script>

