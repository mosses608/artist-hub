@extends('partials.navigate')
@extends('partials.footer')<br><br><br>
<center>
    @foreach($listings as $listing)
    @endforeach
    <form action="/responses" class="accept-reject" method="POST">
        @csrf
        <p>Accept or Reject The Request</p><br>
        <label for="action">Select Action</label><br>
        <select name="action" id="" class="select">
            <option value="0">Choose</option>
            <option value="1">Acception</option>
            <option value="2">Rejection</option>
        </select><br><br>
        <div class="acception-contents" style="display:none;">
        <label for="name">Your Contact</label><br>
        <input type="text" name="contact" id="" value="{{$listing->contact}}"><br><br>
        <label for="name">Your Email</label><br>
        <input type="email" name="email" id="" value="{{$listing->email}}"><br><br>
        <label for="name">Your Name</label><br>
        <input type="text" name="name_accept" id="" value="{{$listing->artist_name}}"><br><br>
        <label for="name">Who requested</label><br>
        <select name="request_accepted" id="" class="select">
            <option value="Choose">Choose</option>
            @foreach($listings as $listing)
            <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
            @endforeach
        </select><br><br>
        </div>
        <div class="rejection-choice p-4 mt-10" style="display:none;">
        <label for="name">Your Name</label><br>
        <input type="text" name="name_reject" id="" value="{{$listing->artist_name}}"><br><br>
        <label for="name">Who requested</label><br>
        <select name="request_rejected" id="" class="select">
            <option value="Choose">Choose</option>
            @foreach($listings as $listing)
            <option value="{{$listing->artist_name}}">{{$listing->artist_name}}</option>
            @endforeach
        </select><br><br>
        <label for="reason">Reason</label><br>
        <textarea name="reason" id="" placeholder="Please write a reason for rejection"></textarea>
        </div>
        <button type="submit">Respond</button><br><br>
    </form>
    <x-replie-response-card />
</center>
<br><br><br>
<style>
    
    .reply{
        display:block;
    }
    .accept-reject{
        background-color:#FFFFFF;
        width:60%;
    }
    .accept-reject p{
        background-color:green;
        padding:10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color:#FFFFFF;
    }
    .accept-reject label{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        float:left;
        margin-left:2%;
    }
    .accept-reject input,select,textarea{
        width:96%;
        padding:10px;
    }
    .accept-reject button{
        padding:10px;
        background-color:#007bFF;
        border:none;
        width:100px;
        cursor: pointer;
        color:#FFFFFF;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight:400;
    }
    .accept-reject button:hover{
        color:#000000;
        font-weight:400;
    }
    .active{
        display:block;
    }
</style>

<script>
    const replyForm=document.querySelector('.accept-reject');
    const popUpForm=document.querySelector('.reply');
    


    popUpForm.addEventListener('click', function(){
        replyForm.classList.toggle('active');
    });

</script>
    

<script>
    const selections=document.querySelector('.select');
    const acceptionContents=document.querySelector('.acception-contents');
    const rejectionContents=document.querySelector('.rejection-choice');


    selections.addEventListener('change', function(){
        const selectedValue=selections.value;
        
        acceptionContents.style.display='none';
        rejectionContents.style.display='none';


        if(selectedValue==='1'){
            acceptionContents.style.display='block';
        }else if(selectedValue==='2'){
            rejectionContents.style.display='block';
        }else{
            
        acceptionContents.style.display='none';
        rejectionContents.style.display='none';

        }
    });
</script>
