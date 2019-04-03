let buttonAdd = document.querySelector('.courses__add')
let buttonClose = document.querySelector('.form__close')
let formWrapper = document.querySelector('.form__courses')
let formUsers = document.querySelector('#form__courses--add')
let fields = document.querySelectorAll('#form__courses--add [name]')
let course = {}

onSubmit()
openForm()
closeForm() 
loadStore()
selectAll()

function openForm () {
  buttonAdd.addEventListener('click', function() {
    formWrapper.style.display = 'flex'
  })
}

function closeForm() {
  buttonClose.addEventListener('click', function() {
    formWrapper.style.display = 'none'
  })
}

function getPhoto() {
  return new Promise(function(resolve, reject) {
    let fileReader = new FileReader()
    let userPhoto = [...formUsers.elements].filter((item) => {
      if (item.name === 'photo') {
        return item
      }
    })
    
    let file = userPhoto[0].files[0]

    fileReader.onload = () => {
      resolve(fileReader.result)
    }

    fileReader.onerror = () => {
      reject(e)
    }

    fileReader.readAsDataURL(file)
  })
}

function onSubmit () {
  formUsers.addEventListener('submit', function(e) {
    e.preventDefault()    
    fields.forEach((item, index) => {
      course[item.name] = item.value
    })   

    getPhoto().then(function(content) {
      course['photo'] = content
      insertStore(course)      
      addCourse(course)
    }, function(e) {
      console.error(e)
    })

    clearForm()
  }) 
}

function clearForm() {
  fields.forEach((item, index) => {
    item.value = ''
  })  
  formWrapper.style.display = 'none'
}

function selectAll() {
  let courses = loadStore()

  courses.forEach(course => {
    addCourse(course)
  })
}

function loadStore() {
  let courses = []

  if (localStorage.getItem("courses")) {
    courses = JSON.parse(localStorage.getItem("courses"))
  } 

  return courses
}


function insertStore(data) {

  if (loadStore().length === 5) {
    alert('Você excedeu o limite do localstore.')
  }
  
  let courses = loadStore()

  if (localStorage.getItem("courses")) {
    courses = JSON.parse(localStorage.getItem("courses"))
  }  

  courses.push(data)

  localStorage.setItem("courses", JSON.stringify(courses))
}


function addCourse(dataCourse) { 
  let divList = document.querySelector('.courses__list')
  let div = document.createElement('div')   

  div.classList.add('courses__card')
  div.innerHTML = `   
    <img src="${dataCourse.photo}" />
    <div class="courses__card--description">
      <h4>${dataCourse.titulo}</h4>
      <p>${dataCourse.descricao}</p>
    </div>
    <a class="courses__button flexHorizontalVertical" href="#">ver curso</a>  
  `

  divList.insertBefore(div, divList.firstChild)
}


