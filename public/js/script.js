
// $('#increase_product_name').click(function () {
//     var clone = $('#product_name').eq(0).clone();
//     clone.val('');
//     length = $('#product_name_area').children().length;
//     clone.attr('placeholder', (length + 1) +'行目');
//     $('#product_name_area').append(clone); 
// }); 



function increase_row (event) {
    let row_att = event.data.row_att;
    console.log(row_att);
    let clone = $('#' + row_att).eq(0).clone();
    clone.val('');
    length = $('#' + row_att + '_area').children().length;
    clone.attr('placeholder', (length + 1) +'行目');
    $('#' + row_att + '_area').append(clone); 
}

$('#increase_product_name').click({row_att : 'product_name'}, increase_row);
$('#increase_price').click({row_att : 'price'}, increase_row);
$('#increase_description').click({row_att : 'description'}, increase_row);