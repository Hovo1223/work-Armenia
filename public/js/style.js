$(document).ready(function () {
    $('.nav-link').on('click', function () {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });

    $('.search-select').select2({
        placeholder: 'Ընտրել քաղաքը',
        allowClear: false,
        width: '100%',
        minimumResultsForSearch: 0
    });

    $('.hero-option').on('click', function (e) {
        e.preventDefault();

        $('.hero-option').removeClass('active');
        $(this).addClass('active');

        const type = $(this).data('type');

        if (type === 'job') {
            $('.form-input').attr('placeholder', 'Որոնել աշխատանք (օր.՝ ծրագրավորող, հաշվապահ...)');
        } else {
            $('.form-input').attr('placeholder', 'Որոնել թեկնածու (անունը կամ մասնագիտությունը)');
        }
    });
});
