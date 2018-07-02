$(document).ready(()=>{
    console.log('yes');
    total = 0;
    $('.subtotal').map((key, val)=>{
        total = total + Number(val.innerHTML).toFixed(2);
    })

    $('#totalfrom').attr('value',total);
    $('#total').html('$'+total);
})