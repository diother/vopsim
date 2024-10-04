export function mobileMenuJS() {
    const mobileMenu = document.querySelector('.mobile-menu')
    if (!mobileMenu) return

    const html = document.documentElement
    const open = document.querySelector('.open-button')
    const close = mobileMenu.querySelector('.close-button')

    open.addEventListener('click', (e) => {
        mobileMenu.classList.add('active', 'animation')
        html.classList.add('active-menu')
    })
    close.addEventListener('click', () => {
        mobileMenu.classList.remove('animation')

        setTimeout(() => {
            mobileMenu.classList.remove('active')
            html.removeAttribute('class');
            resetMenu()
        }, 500)
    })
}