$(function () {
    $('#jobSearch').on('submit', function (e) {
        e.preventDefault();
        const term = ($('#searchText').val() || '').toLocaleLowerCase('hy'), category = $('#searchCategory').val(),
            city = $('#searchCity').val();
        let visible = 0;
        $('.job-card').each(function () {
            const c = $(this), title = (c.data('title') || '').toLocaleLowerCase('hy'),
                ok = (!term || title.includes(term)) && (!category || c.data('category') === category) && (!city || c.data('city') === city);
            c.toggleClass('d-none', !ok);
            if (ok) visible++;
        });
        $('#noResults').toggleClass('d-none', visible !== 0);
        document.querySelector('#jobs').scrollIntoView({behavior: 'smooth', block: 'start'});
    });
    $('.category-card[data-category]').on('click', function () {
        $('#searchCategory').val($(this).data('category'));
        $('#jobSearch').trigger('submit');
    });
    $('.favorite').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-saved').find('i').toggleClass('bi-heart bi-heart-fill');
    });
    $('.icon-btn').on('click', function () {
        $('html,body').animate({scrollTop: $('#jobs').offset().top - 20}, 350);
        $('#searchText').trigger('focus');
    });
    $('.video-card').on('click', function (e) {
        e.preventDefault();
        alert('Թեկնածուի վիդեո պրոֆիլը շուտով հասանելի կլինի։');
    });
    $('.apply-btn').on('click', function (e) {
        e.preventDefault();
        alert('Դիմելու հնարավորությունը կմիանա backend-ի հետ ինտեգրվելուց հետո։');
    });
});
