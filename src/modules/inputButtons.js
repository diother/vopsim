export function inputButtons() { jQuery(function($) {
    if (!$('.content-area .minus').length) return
    
    $('.content-area').on('click', '.minus', function() {
        const input = $(this).parent().find('input.qty')
        input[0].stepDown()
        input.trigger('change')
    })
    $('.content-area').on('click', '.plus', function() {
        const input = $(this).parent().find('input.qty')
        input[0].stepUp()
        input.trigger('change')
    })
})}