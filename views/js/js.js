$('#blackButton').click(function() {
    $('input[class=default1]').prop('checked', true);
});

$('#redButton').click(function() {
    $('input[class=default2]').prop('checked', true);
});

$('#rectangle').click(function() {
    $('input[type=checkbox]').prop('checked', false);
    $('input[type=radio]').prop('checked', false);
    // $('input[class=b2]').prop('checked', false);
    // document.getElementById("b2").checked = false;
    // document.getElementById("r2").checked = false;
});

var check;

$('input[type="radio"]').hover(function() {
    check = $(this).is(':checked');
});

$('input[type="radio"]').click(function() {
    check = !check;
    $(this).attr("checked", check);
});

// $('.dubRed .doubleRed').click(function(){
//     $(this).parent().find('.doubleRed').removeClass('selected');
//     $(this).addClass('selected');
//     var val = $(this).attr('data-value');
//     //alert(val);
//     $(this).parent().find('input').val(val);
// });