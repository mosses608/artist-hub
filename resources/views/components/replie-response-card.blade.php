@if(session()->has('message'))
<div class="response-replied">
    <p>{{session('message')}}</p>
</div>
@endif
<style>
    .response-replied{
        position:fixed;top:0%;background-color:orange;padding:10px;width:30%;left:35%;
    }
    .response-replied p{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color:#FFFFFF;
    }
    @media(max-width:768px){
        .response-replied{
            left:5%;
            padding:8px;
            font-size:14px;
            width:90%;
        }
    }
</style>