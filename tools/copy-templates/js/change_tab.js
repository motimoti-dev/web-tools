$(function(){
    $(document).on('click', '.tab-btn', function(){
        let index = $('.tab-btn').index(this);
        if(index % 2 == 1){
            $('.tab-btn').eq(index - 1).removeClass('btn-active');
            $('.tab-data').eq(index - 1).removeClass('active');
            $('.tab-data').eq(index).addClass('active');
        } else {
            $('.tab-btn').eq(index + 1).removeClass('btn-active');
            $('.tab-data').eq(index + 1).removeClass('active');
            $('.tab-data').eq(index).addClass('active');
        }
        $(this).addClass('btn-active');
    });
});