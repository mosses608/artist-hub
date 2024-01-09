@if(session()->has('message'))
<div class="show-collaboration-request-sent">
    <p>{{session('message')}}</p>
</div>
@endif
<style>
    .show-collaboration-request-sent p{
        position:fixed;top:0%;background-color:orange;padding:10px;width:35%;left:35%;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:#FFFFFF;
    }
</style>