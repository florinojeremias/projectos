/*$(function(){
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
$('#formarea').submit(function(event){
    event.preventDefault();

    $.ajax({
        type:'POST',
        url:'/area/areacadastro',
        data:$(this).serialize(),
        dataType:'json',
        success:function(data){
            alert(data.success);
        }
    });
});
});
*/
