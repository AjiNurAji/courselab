feather.replace();

const logo = document.getElementById('logo')
const navbar = document.getElementById('navbar')

const scrollHandle = () => {
  const scrolY = window.scrollY

  if (scrolY > 0) {
    logo.src = './assets/images/logo.svg'
    navbar.classList.add('active')
  } else {
    logo.src = './assets/images/logo-white.svg'
    navbar.classList.remove('active')
  }
}

window.addEventListener('scroll', scrollHandle)