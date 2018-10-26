$(document).ready(function () {


    // deleting photos
    $('a.delete-photo').click(function () {

        var id = $(this).attr('data-photo-id');
        var input = '<input type="hidden" name="photo_ids[]" value="'+id+'">';
        $('#photos-to-be-deleted').append(input);
        $(this).parents('.col-md-3').remove();

    });


    // are you sure
    $('.danger-alert').click(function () {
        var target = $(this).attr('data-target');
        $('#are-you-sure #yes').attr('data-target', target);
        $('#are-you-sure').slideDown();
    });

    $('#are-you-sure #no').click(function () {
        $('#are-you-sure').slideUp();
    });

    $('#are-you-sure #yes').click(function () {
        var id = $(this).attr('data-target');
        var form = $('#'+id);
        form.submit();
    });


});


// clone action

$(document).on('click', '#cloner', function () {
    var row = $('.clone-row').first();
    var count = $('.clone-row').length;
    var cloned = row.clone();
    cloned.find('input[type!=file], textarea').val('');
    cloned.find('input#position').val(count+1);
    cloned.appendTo('#clone-box');
    $('.delete-clone-row').show();
});

$(document).on('click', '.delete-clone-row', function () {
    var row = $(this).parents('.clone-row');
    row.remove();
    var count = $('.clone-row').length;
    if (count == 1) {
        $('.delete-clone-row').hide();
    }
});
