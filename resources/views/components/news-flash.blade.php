@if(session()->has('message'))
<div class="news-flash-display" style="position:fixed;top:0%;background-color:orange;padding:10px;width:30%;left:35%; text-align:center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:#FFFFFF;font-weight:400;">
    <p>{{session('message')}}</p>
</div>

@endif
<style>
    @media(max-width:768px){
        .news-flash-display{
            width:90%;
            left:5%;
            padding:8px;
            font-size:14px;
        }
    }
</style>