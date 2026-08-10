<a onclick="openWhatsAppChat()" class="floatingWhatsAppButton bg-success">
    <i class="fab fa-whatsapp my-float z-index9" style="color: rgb(255,255,255);z-index:9"></i>
</a>
<script>
    function openWhatsAppChat(msg)
    {
        if(!msg) msg = 'Hi! I am interested in a project.';
       openWhatsApp('7007502987', msg);
    }
</script>