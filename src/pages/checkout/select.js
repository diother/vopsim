export function select() { jQuery(function($) {

    $(document.body).on('change', '#billing_state_field, #shipping_state_field', function(e) {
        check(e.currentTarget)
    })

    const billing = document.querySelector('#billing_state_field')
    const shipping = document.querySelector('#shipping_state_field')

    check(billing)
    check(shipping)

    function check(obj) {
        const parent = obj.querySelector('.select2-selection__rendered')

        if (parent.firstChild.tagName) {
            obj.classList.remove('active')
        }
        else {
            obj.classList.add('active')
        }
    }
})}