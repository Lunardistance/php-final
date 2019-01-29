$('#blackButton').click(function() {
    $('input[class=default1]').prop('checked', true);
});

$('#redButton').click(function() {
    $('input[class=default2]').prop('checked', true);
});

$('#all').click(function() {
    $('input[type=checkbox]').prop('checked', false);
});

// $('.dubRed .doubleRed').click(function(){
//     $(this).parent().find('.doubleRed').removeClass('selected');
//     $(this).addClass('selected');
//     var val = $(this).attr('data-value');
//     //alert(val);
//     $(this).parent().find('input').val(val);
// });