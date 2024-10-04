export function accordion() {
    const accordion = document.querySelector('.accordion')
    if (!accordion) return

    const elements = accordion.querySelectorAll('.element')
    var active

    for(let i = 0; i < elements.length; i ++) {
        var title = elements[i].querySelector('.title')
        title.addEventListener('click', elementClick)
        
        elements[i].setAttribute('element_order', i + 1)
    }
    function elementClick(e) {
        const current = e.currentTarget.parentElement
        const id = current.getAttribute('element_order')
    
        if(active != id) {
            current.classList.add('active')
            if(active)
                elements[active - 1].classList.remove('active')
            active = id
        }
        else {
            current.classList.remove('active')
            active = null
        }
    }
}