$(document).ready(()=>{
    console.log('estoy aqui');
    $('.delete').click(function(){
        var val = $(this).attr('val');
        $.ajax({
            url:'cart/delete',
            beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
            type:'get',
            data:{
                id:val
            },
            success:()=>{
                console.log($(this))
            },
            fail:()=>{
                console.log($(this))
            }
        });
    });
});