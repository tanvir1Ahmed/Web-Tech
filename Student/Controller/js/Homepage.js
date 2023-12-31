$('.list').hide(1000, function () {
    $('.list').show(1000);
});

$('.heading').click(function () {
    $('.list').toggle(500);
})