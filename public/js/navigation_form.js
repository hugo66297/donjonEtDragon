document.addEventListener('DOMContentLoaded', function () {
    let index = 0
    let steps = [
        document.querySelector('#step-1'),
        document.querySelector('#step-2'),
        document.querySelector('#step-3'),
        document.querySelector('#step-4'),
        document.querySelector('#step-5'),
    ]
    let previous = document.querySelector('#prev')
    let next = document.querySelector('#next')
    let finish = document.querySelector('#finish')

    let form = document.querySelector('#form-perso')
    previous.addEventListener('click', () => {
        if (index > 0) {
            steps[index].querySelector('span').classList.replace('bg-red-800', 'bg-gray-700')
            form.querySelector(`#step-div-${index}`).classList.toggle('hidden')
            index--
            steps[index].querySelector('span').querySelector(`#step-${index}-icon`).classList.toggle('hidden')
            steps[index].querySelector('span').querySelector('#check').classList.toggle('hidden')
            steps[index].classList.replace('border-red', 'border-gray')
            form.querySelector(`#step-div-${index}`).classList.toggle('hidden')
        }
        index === 0 && previous.classList.toggle('hidden')
        if (next.classList.contains('hidden')) {
            next.classList.toggle('hidden')
            finish.classList.toggle('hidden')
        }
    })
    next.addEventListener('click', () => {
        if (index < steps.length) {
            steps[index].classList.replace('border-gray', 'border-red')
            steps[index].querySelector('span').querySelector(`#step-${index}-icon`).classList.toggle('hidden')
            steps[index].querySelector('span').querySelector('#check').classList.toggle('hidden')
            form.querySelector(`#step-div-${index}`).classList.toggle('hidden')
            index++
            steps[index].querySelector('span').classList.replace('bg-gray-700', 'bg-red-800')
            form.querySelector(`#step-div-${index}`).classList.toggle('hidden')
        }
        if (index === steps.length - 1) {
            next.classList.toggle('hidden')
            finish.classList.toggle('hidden')
        }
        previous.classList.contains('hidden') && previous.classList.toggle('hidden')
    })
})
