import './../css/style.scss'

// General Javascript Modules
import { mobileMenuJS as mobileMenu } from './modules/mobileMenu'
import { sideScroll } from './modules/sideScroll'
import { hideHeader } from './modules/hideHeader'
import { inputButtons } from './modules/inputButtons'
import { accordion } from './modules/accordion'
import { searchFunction} from './modules/searchFunction'

// Conditional Javascript Modules
async function homeLoad() {
    let { testimonials } = await import('./pages/homepage/testimonials')
    testimonials()
}
async function singleProductLoad() {
    let { variationPrice } = await import('./pages/single-product/variationPrice')
    variationPrice()
}
async function cartLoad() {
    let { cartAjax } = await import('./pages/cart/cartAjax')
    cartAjax()
}
async function checkoutLoad() {
    let { checkout } = await import('./pages/checkout/checkout')
    let { select } = await import('./pages/checkout/select')
    
    checkout()
    select()
}

// Instantiate Modules
mobileMenu()
sideScroll()
hideHeader()
inputButtons()
accordion()
searchFunction()

if (document.body.classList.contains('home')) {
    homeLoad()
}
if (document.body.classList.contains('single-product')) {
    singleProductLoad()
}
if (document.body.classList.contains('woocommerce-cart')) {
    cartLoad()
}
if (document.body.classList.contains('woocommerce-checkout')) {
    checkoutLoad()
}