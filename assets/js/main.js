//Скрол вверх
const menu_button = document.querySelector('.menu_mobile');


menu_button.addEventListener('click',()=>{
  document.body.classList.toggle('hiden');
  document.querySelector(".container_menu").classList.toggle('visibal_menu')
  menu_button.classList.toggle('close')
})


window.addEventListener("scroll", () => {
    const scrolledPixels =
      window.scrollY ||
      document.documentElement.scrollTop ||
      document.body.scrollTop;
    // Проверяем, пролистал ли пользователь более 200 пикселей
    if (scrolledPixels > 200) {
      document.getElementById("up_to_header").style = "  opacity: 1;";
    } else {
      document.getElementById("up_to_header").style = "  opacity: 0;";
    }
  });
  document.querySelector("#up_to_header").addEventListener("click", () => {
    // Находим элемент, на который нужно выполнить скролл (например, элемент с id "target")
    const targetElement = document.querySelector("body");
  
    // Выполняем скролл к элементу с анимацией
    targetElement.scrollIntoView({
      behavior: "smooth", // Добавляем анимацию скролла
      block: "start", // Выравниваем элемент по верхней границе окна
    });
  });
