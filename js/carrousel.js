(function(){
  console.log("carrousel.js");
  let hero__radio__input = document.querySelectorAll(".hero__radio__input");
  let hero_carrousel = document.querySelectorAll(".hero__carrousel");
  let hero_animation = document.querySelectorAll(".hero__animation");
  console.log("hero__radio__input.lenght = " , hero__radio__input.length);
  console.log("hero__carrousel = ", hero_carrousel.length);

  hero__radio__input.forEach(elm => {
    console.log("elm.id_carrousel = ", elm.dataset.id_carrousel);

    elm.addEventListener("mousedown", function() {
      console.log(elm.dataset.id_carrousel);
      parcourir_carrousel();
      parcourir_animation();
      // hero_carrousel[elm.dataset.id_carrousel].classList.toggle("hero__carrousel--active")
      hero_animation[elm.dataset.id_carrousel].style.display = "block";
    })
  })

  let currentIndex = 0;
  setInterval(() => {
    hero_carrousel[currentIndex].classList.toggle("hero__carrousel--active");
    hero_animation[currentIndex].classList.toggle("hero__animation--active");

    if (hero__radio__input[currentIndex]) {
      hero__radio__input[currentIndex].checked = true;
    }

    currentIndex = (currentIndex + 1) % hero_carrousel.length;
  }, 5000);

  function parcourir_carrousel(){
    hero_carrousel.forEach(img => {
      img.classList.toggle("hero__carrousel--active");
    })
  }

  function parcourir_animation(){
    hero_animation.forEach(elm => {
      elm.style.display = "none";
    })
  }


  })()