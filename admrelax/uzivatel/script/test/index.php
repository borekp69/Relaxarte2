



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script>

$(document).ready(function(){
    setInterval(function(){
        $.ajax({
            url: 'content.php', // URL of the server-side script
            success: function(data) {
                $('#content').html(data); // Update the content of the DIV element
            }
        });
    }, 5000); // Refresh the content every 5 seconds
});
</script>

obsah:
<div id="content"></div>