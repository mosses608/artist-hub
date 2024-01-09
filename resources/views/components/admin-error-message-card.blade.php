@if(session()->has('error'))

<div class="admin-response-login">
    <p>{{session('error')}}</p>
</div>

@endif
<style>
    .admin-response-login p{
        position:fixed;top:0%;background-color:orange;padding:10px;width:30%;left:35%;color:#FFFFFF;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align:center;
    }
</style>