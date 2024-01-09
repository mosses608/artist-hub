<center>
<div class="footer_items">
    <p>Developed by Novan_IT_Solutions &copy;Copy <span class="currentYear">currentYear</span>, All rights reserved.
        <button type="button" class="footer_button" style="float:right;"><a href="/listings/create" style="text-decoration:none; background-color:green; color:#FFFFFF;">Post profile</a></button>
</p>
<script>
    
const currentYear=new Date();

const option={weekly: 'long', year: 'numeric'};

const formattedYear=currentYear.toLocaleDateString('en-US', option);

document.querySelector('.currentYear').textContent=formattedYear;

</script>
</div></center>
<style>
    .footer_items p:hover{
        color:#F0F0F0;
    }
    .footer_items p{
        padding:12px;
        position:fixed;
        bottom:0%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        width:100%;
        background-color:#176B87;
    }
    .footer_button{
        text-transform:uppercase;
        padding:10px;
        border:none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color:green;
        color:#FFFFFF;
        cursor: pointer;
    }
    @media(max-width:768px){
        .footer_items p{
            padding:12px;
            position:fixed;
            bottom:0%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width:100%;
            font-size:14px;
            background-color:#176B87;
        }
        .footer_button{
            text-transform:uppercase;
            padding:10px;
            border:none;
            font-size:12px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:green;
            color:#FFFFFF;
            cursor: pointer;
        }
    }
</style>