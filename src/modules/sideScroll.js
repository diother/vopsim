export function sideScroll() {
    const sliders = document.querySelectorAll('.side-scroll')
    if (!sliders) return

    let isDown = false
    let startX
    let scrollLeft

    sliders.forEach(slider => {
        slider.addEventListener('mousedown', (e) => {
            isDown = true
            slider.classList.add('active')
            startX = e.pageX - slider.offsetLeft
            scrollLeft = slider.scrollLeft
        })
        slider.addEventListener('mouseleave', () => {
            isDown = false
            slider.classList.remove('active')
        })
        slider.addEventListener('mouseup', () => {
            isDown = false
            slider.classList.remove('active')
        })
        slider.addEventListener('mousemove', (e) => {
            if(!isDown) return
            e.preventDefault()
            const speed = 1
            const x = e.pageX - slider.offsetLeft
            const walk = (x - startX) * speed
            slider.scrollLeft = scrollLeft - walk
        })
    })
}