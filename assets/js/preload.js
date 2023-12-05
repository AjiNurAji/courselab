const preload = document.getElementById("preload");


setTimeout(() => {
  document.body.style.overflowY = 'auto';
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  preload.classList.remove("active");
}, 1000);
