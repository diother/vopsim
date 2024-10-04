export function testimonials() {
    const section = document.querySelector('.our-service-section')
    const buttonLeft = section.querySelector('.button-left')
    const buttonRight = section.querySelector('.button-right')
    const testies = section.querySelectorAll('.testi')

    var active = 1

    buttonLeft.addEventListener('click', () => {
        testies[active - 1].classList.remove('active')

        active --
        if (!active)
            active = testies.length

        testies[active - 1].classList.add('active')
    })
    buttonRight.addEventListener('click', () => {
        testies[active - 1].classList.remove('active')

        active ++
        if (active == testies.length + 1)
            active = 1

        testies[active - 1].classList.add('active')
    })
}