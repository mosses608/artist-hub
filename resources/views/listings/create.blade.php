@include('partials.navigate')
@extends('partials.footer')<br>
<button type="button" class="back_button"><a href="/">&#8592;</a></button>
<center>
    <div class="user_registration_form">
        <form action="/listings" method="POST" enctype="multi-part/form-data">
            @csrf
            <p>Fill This Form Correctly!</p>
            <label for="">What kind of profile</label><br>
            <select name="" id="" class="select">
                <option value="Choose">Choose</option>
                <option value="Music">Music</option>
                <option value="Movie">Movie</option>
            </select><br><br>
            <div class="occupation_selection" style="display:none;">
                <label for="">Select your occupation</label><br>
                <select name="occupation" id="" class="occupation">
                    <option value="Choose">Choose</option>
                    <option value="Musician">Musician</option>
                    <option value="Actor">Actor</option>
                    <option value="Actress">Actress</option>
                    <option value="Director">Director</option>
                </select><br>
            </div><br><br>
            <div class="allDataSet" style="display:none;">
            <label for="name">Artist Name</label><br>
            <input type="text" name="artist_name" id="name" value="{{old('artist_name')}}" placeholder="Enter artist name" autocomplete="off"><br>
            @error('artist_name')
            <span>Artist name is required!</span>
            @enderror
            <br><br>
            <label for="name">Artist Email Address</label><br>
            <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Enter artist email address" autocomplete="off"><br>
            @error('email')
            <span>Artist email is required</span>
            @enderror
            <br><br>
            <label for="name">Artist Phone Number</label><br>
            <input type="number" name="contact" id="contact" value="{{old('contact')}}" placeholder="Enter artist phone number" autocomplete="off"><br>
            @error('contact')
            <span>Artist phone number is required</span>
            @enderror
            <br><br>
            <label for="name">Artist Brand</label><br>
            <input type="text" name="brand" id="brand" value="{{old('brand')}}" placeholder="Enter artist brand" autocomplete="off"><br><br>
            <label for="name">Artist Music/Movie Type</label><br>
            <input type="text" name="music_movie_type" id="genre" value="{{old('music_movie_type')}}" placeholder="Enter artist music/movie type" autocomplete="off"><br>
            @error('music_movie_type')
            <span>Art type is required</span>
            @enderror
            <br><br>
            <label for="Gender">Artist Gender</label><br>
            <select name="gender" id="gender">
                <option value="choose">Choose</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="other">Other</option>
            </select><br>
            @error('gender')
            <span>Artist gender is required</span>
            @enderror
            <br><br>
            <label for="name">Artist Nationality</label><br>
            <input type="text" name="nationality" id="nationality" value="{{old('nationality')}}" placeholder="Enter artist nationality" autocomplete="off"><br>
            @error('nationality')
            <span>Artist nationality is required</span>
            @enderror
            <br><br>
            <label for="name">Artist Instagram Name</label><br>
            <input type="text" name="instagram" id="instagram" value="{{old('instagram')}}" placeholder="Enter artist instagram name" autocomplete="off"><br>
            @error('instagram')
            <span>Artist intagram name is required</span>
            @enderror
            <br><br>
            <label for="name">Artist Twitter Name</label><br>
            <input type="text" name="twitter" id="twitter" value="{{old('twitter')}}" placeholder="Enter artist twitter name" autocomplete="off"><br>
            @error('twitter')
            <span>Artist twitter name is required</span>
            @enderror
            <br><br>
            <label for="name">Artist You-Tube Name</label><br>
            <input type="text" name="you_tube" id="you_tube" value="{{old('you_tube')}}" placeholder="Enter artist you-tube name" autocomplete="off"><br>
            @error('you_tube')
            <span>Artist you-tube name is required</span>
            @enderror
            <br><br>
            <label for="name">Upload profile picture</label><br>
            <input type="file" name="profile" id=""><br><br>
            <button type="submit">Add Artist</button><br>
            </div>
        </form><br><br>
    </div><br>
    <style>
        .musician,.directors em{
            color:#0000FF;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .user_registration_form form span{
            background-color:inherit;
            color:#FF0000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-style:italic;
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
        .user_registration_form form{
            margin-bottom:10%;
            background-color:#FFFFFF;
            border:10px solid #FFFFFF;
            width:80%;
           
        }
        .user_registration_form form label{
            float:left;
            color:#0000FF;
            margin-left:1%;
            background-color:inherit;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .user_registration_form input,select{
            width:100%;
            padding:10px;
        }
        .user_registration_form form p{
            padding:10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:#279EFF;
        }
        .user_registration_form form button{
            padding:10px;
            background-color:#00FF00;
            width:100%;
            font-size:20px;
            cursor:pointer;
            border:none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color:#000000;
        }
        .user_registration_form form button:hover{
            color:#FFFFFF;
            background-color:#222;
        }
    </style>
</center>
<script>
    var select=document.querySelector('.occupation');
    var AllDataSets=document.querySelector('.allDataSet');

    select.addEventListener('change', function(){
        const selectValue=select.value;

        AllDataSets.style.display='none';

        if(selectValue==='Musician'){
            AllDataSets.style.display='block';
        }else if(selectValue==='Actor'){
            AllDataSets.style.display='block';
        }else if(selectValue==='Actress'){
            AllDataSets.style.display='block';
        }else if(selectValue==='Director'){
            AllDataSets.style.display='block';
        }
        
    });
</script>


<script>
    var SelectProfile=document.querySelector('.select');
    var SelectOccupation=document.querySelector('.occupation_selection');

    SelectProfile.addEventListener('change', function(){
       const selectedprofilevalue=SelectProfile.value;

        SelectOccupation.style.display='none';

        if(selectedprofilevalue==='Music'){
            SelectOccupation.style.display='block';
        }
        else if(selectedprofilevalue==='Movie'){
            SelectOccupation.style.display='block';
        }
    });
</script>