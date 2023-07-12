$(function(){
    $(document).on('click', '.copy-button', function(){
        //let content = $(this).closest('.code-area').find('.tab-content').find('.tab-data.active').html().replaceAll(/^\s+|\s+$/g, '');
        let content = $(this).closest('.code-area').find('.tab-content').find('.tab-data.active').html().replace(/<br>/g, '\n').replace(/<\/?[^>]+(>|$)/g, '').trim();
        navigator.clipboard.writeText(content);
        $(this).find('img').attr('src', 'img/check_FILL0_wght400_GRAD0_opsz48.png');
        $(this).find('.copy-icon').removeClass('copy-icon');
        $(this).find('img').addClass('copied-icon');
    });

    // 画像を元に戻す
    $(document).on('click', 'body', function(e){
        if(!$(e.target).closest('.copied-icon').length) {
            $('.copied-icon').addClass('copy-icon');
            $('.copy-icon').attr('src', 'img/content_copy_FILL0_wght400_GRAD0_opsz48.png');
            $('.copied-icon').removeClass('copied-icon');
        } else {
            ;
        }
    });
});