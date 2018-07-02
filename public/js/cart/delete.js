$(document).ready(()=>{
    $('input[type=checkbox]').on('change', ()=>{
        if($('input[type=checkbox]:checked').length>0){
                $('#buy-btn').removeAttr('disabled');
            }
        else
        $('#buy-btn').attr('disabled','');
    });
    
});