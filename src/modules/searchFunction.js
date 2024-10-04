export function searchFunction() { jQuery(function($) {
    const search = document.querySelector('.search-function')
    if (!search) return

    const html = document.documentElement
    const open = document.querySelector('.search-button')
    const close = search.querySelector('.close-button')
    const spinnerContainer = search.querySelector('.spinner-container')
    const suggestionContainer = search.querySelector('.suggestion-container')
    const pageContainer = search.querySelector('.page-container')
    const productContainer = search.querySelector('.product-container')

    var currentState = 'reset'

    open.addEventListener('click', (e) => {
        search.classList.add('active')
        html.classList.add('active-menu')
        setTimeout(() => { input.focus() }, 300)
    })
    close.addEventListener('click', () => {
        search.classList.remove('active')
        html.removeAttribute('class')
        activateResetState()
    })

    const input = search.querySelector('input')
    const typingTime = 750
    var spinnerVisible = false
    var inputTimeout
    var previousValue

    input.addEventListener('keyup', () => {
        if (input.value != previousValue) {
            clearTimeout(inputTimeout)

            if (input.value) {
                if (currentState != 'typing') {
                    activateTypingState()
                }
                inputTimeout = setTimeout(getResults, typingTime)
            }
            else {
                setTimeout(activateResetState, typingTime)
            }
        }
        previousValue = input.value
    })
    function getResults() {
        $.getJSON(vopsimData.rootUrl + '/wp-json/vopsim/v1/search?term=' + input.value, (data) => {
            let products = data.products
            let pages = data.pages

            if (pages.length) {
                displayPages(pages)
                activateResultState(true)
            }
            else {
                activateResultState(false)
            }

            displayProducts(products)
        })
        spinnerVisible = false
    }
    function displayProducts(data) {
        productContainer.innerHTML = ''

        data.forEach(e => {
            productContainer.innerHTML += `
            <div class="product">
                <a href="${e.permalink}">
                    ${e.thumbnail}
                    <div class="product-description">
                        <h2 class="woocommerce-loop-product__title">${e.title}</h2>
                        ${e.price}
                    </div>
                </a>
            </div>`
        })
    }
    function displayPages(data) {
        pageContainer.innerHTML = ''
        data.forEach(e => {
            pageContainer.innerHTML += `<a href="${e.permalink}">${e.title}</a>`
        })
    }
    function activateResetState() {
        suggestionContainer.style.display = 'flex'
        spinnerContainer.style.display = 'none'
        spinnerVisible = false
        pageContainer.style.display = 'none' 
        productContainer.style.display = 'none'
        currentState = 'reset'
    }
    function activateTypingState() {
        spinnerContainer.style.display = 'block'
        spinnerVisible = true
        suggestionContainer.style.display = 'none'
        currentState = 'typing'
    }
    function activateResultState(pagesVisible) {
        productContainer.style.display = 'grid'
        if (pagesVisible) {
            pageContainer.style.display = 'flex'
        }
        suggestionContainer.style.display = 'none'
        spinnerContainer.style.display = 'none'
        spinnerVisible = false
        currentState = 'result'
    }
})}