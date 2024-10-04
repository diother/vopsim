export function hideHeader() {
    const header = document.querySelector('header')
    if (!header) return

    var didScroll
    window.addEventListener('scroll', () => {
        didScroll = true
    })
    setInterval(() => {
        if(!didScroll) return
        hasScrolled()
        didScroll = false
    }, 250)

    var lastPageOffset = 0
    var delta = 5
    const navbarHeight = header.offsetHeight

    const body = document.body
    const html = document.documentElement
    const documentHeight = Math.max(
            body.scrollHeight, 
            body.offsetHeight, 
            html.clientHeight, 
            html.scrollHeight, 
            html.offsetHeight 
        )

    function hasScrolled() {
        var currentPageOffset = window.pageYOffset

        if (Math.abs(lastPageOffset - currentPageOffset) <= delta) return

        if (currentPageOffset > lastPageOffset && currentPageOffset > navbarHeight) {
            header.classList.add('nav-up')
        } else {
            if (currentPageOffset + window.innerHeight >= documentHeight) return
            header.classList.remove('nav-up')
        }

        lastPageOffset = window.pageYOffset
    }
}

