@if(session()->has('message'))
<center>
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 1000)" x-show="show" class="flash_message_display">
    <p>
        {{session('message')}}
    </p>
</div>
</center>
<style>
    .flash_message_display{
        position:fixed;top:0%;background-color:orange;padding:10px;width:30%;left:35%;
    }
    .flash_message_display p{
        color:#FFFFFF;
    }
    @media(max-width:768px){
        .flash_message_display{
            left:5%;
            padding:8px;
            font-size:14px;
            width:90%;
        }
    }
</style>
@endif