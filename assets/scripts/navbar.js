let mobileMenu = document.getElementById('mobileMenu')
let mobileButton = document.getElementById('mobileButton')

let alertButton = document.getElementById('alertButton')
let alertDropdown = document.getElementById('alertDropDown')

mobileButton.addEventListener('click', function () {
    if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.replace('hidden', 'block')
    } else {
        mobileMenu.classList.replace('block', 'hidden')
    }
})

alertButton.addEventListener('click', function () {
    if (alertDropdown.classList.contains('hidden')) {
        alertDropdown.classList.replace('hidden', 'block')
    } else {
        alertDropdown.classList.replace('block', 'hidden')
    }
})