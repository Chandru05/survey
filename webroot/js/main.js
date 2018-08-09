$('.datePicker').dateDropper();
$('.custom-radio:contains("Other")').next().hide()
$('.custom-checkbox:contains("Other")').next().hide()

$('.custom-radio input[type="radio"]').change(function() {
    if($(this).parent().text().trim() == 'Other') {
        $(this).parent().next('.form-group.mt-2').show()
    } else {
        $(this).parent().parent().find('.form-group.mt-2').hide()
    }
})

$('.custom-checkbox input[type="checkbox"]').change(function() {
    if($(this).is(':checked') && $(this).parent().text().trim() == 'Other') {
        $(this).parent().next('.form-group.mt-2').show()
    } else {
        $(this).parent().parent().find('.form-group.mt-2').hide()
    }
})

$(document).ready(function() {

    var birthYearDD = '<option value="">Select Your Birth Year</option>'
    var currentYear = new Date().getFullYear()
    for(var year = currentYear - 8; year > (currentYear - 40); year--) {
        birthYearDD += '<option value="'+year+'">'+year+'</option>'
    }
    $('select[name="Birthyear"]').html(birthYearDD);

    $('.limit-selection input[type="checkbox"]').change(function() {
        var limit = $(this).parent().parent().data('max-allowed');

        if($(this).is(':checked') && $(this).parent().parent().find('input[type="checkbox"]:checked').length > limit) {
            $(this).prop('checked', false)
        }
    })

    $.validate({
        form : '#surveyForm',
        modules : 'sanitize'
    });

})