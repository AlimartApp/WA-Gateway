$(document).ready(function(){
    $("#data").submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'proses.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data) {
                document.getElementById("#data").reset();
                $('tampil').html(data);
            }
        });
    });
})