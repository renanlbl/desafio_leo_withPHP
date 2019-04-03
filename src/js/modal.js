let modal = document.querySelector('section.modal')
let buttonCloseModal = document.querySelector('.modal__close')

showModalIfNoVisit()
function showModalIfNoVisit() {
  localStorage.getItem("visit") ? null : showModal()
}

function showModal() {
  modal.style.display = 'flex'
}

function closeModal() {
  modal.style.display = 'none'
}

buttonCloseModal.addEventListener('click', function () {
  closeModal()
})

function addVisitLocal () {
  localStorage.setItem('visit', true)
}

window.onload = addVisitLocal()

