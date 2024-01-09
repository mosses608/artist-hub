<center>
<div class="footer_items">
    <p>Developed by Novan_IT_Solutions &copy;Copy <span class="currentYear">currentYear</span>, All rights reserved.</p>
</div></center>
<script>
    const currentYear=new Date();

const option={weekly: 'long', year: 'numeric'};

const formattedYear=currentYear.toLocaleDateString('en-US', option);

document.querySelector('.currentYear').textContent=formattedYear;

</script>
</script>
<style>
    .footer_items{
        position:fixed;
        bottom:0%;
        width:100%;
        background-color:#FFFF00;
    }
    .footer_items p{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding:12px;
    }
    *{
        box-sizing:border-box;
        padding:0%;
        margin:0%;
    }
</style>