export function cartAjax() { jQuery(function($) {
    let timeout
	$('.content-area').on( 'change', 'input.qty', function() {
		if (timeout !== undefined) {
			clearTimeout(timeout)
		}
		timeout = setTimeout(function() {
			$("[name='update_cart']").trigger('click')
		}, 1000 )
	});
})}