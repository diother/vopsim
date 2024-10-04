export function checkout() {
    const inputs = document.querySelectorAll('input:not([type=hidden]):not([type=checkbox])')

    checkInputsActive()

    for(let i = 0; i < inputs.length; i ++) {
        inputs[i].setAttribute('autocomplete', 'chrome-off')
        inputs[i].addEventListener('focus', onFocus)
        inputs[i].addEventListener('focusout', onFocusOut)
    }

    function onFocus(e) {
        setInputActive(e.currentTarget)
    }
    function onFocusOut(e) {
        const current = e.currentTarget

        if (!current.value) {
            unsetInputActive(current)
        }
    }
    function setInputActive(obj) {
        const grandParent = obj.parentElement.parentElement
        grandParent.classList.add('active')
    }
    function unsetInputActive(obj) {
        const grandParent = obj.parentElement.parentElement
        grandParent.classList.remove('active')
    }
    function checkInputsActive() {
        inputs.forEach(input => {
            if (input.value) {
                setInputActive(input)
            }
        })
    }
}