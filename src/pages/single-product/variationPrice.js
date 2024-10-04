export function variationPrice() {
    const price = jQuery('.price')
    if (!price.length) return

    const priceHTML = price.html()
    const cart = jQuery('form.cart')
    
    cart.on('show_variation', function(event, data) {
        var html = data.price_html
        if(html)
            price.html(html)
    })
    .on('hide_variation', function() {
        price.html(priceHTML)
    });
}