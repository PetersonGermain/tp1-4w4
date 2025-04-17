(function(){
  console.log("carrousel.js");
  let hero__radio__input = document.querySelectorAll(".hero__radio__input");
  let hero_carrousel = document.querySelectorAll(".hero__carrousel");
  console.log("hero__radio__input.lenght = " , hero__radio__input.length);
  console.log("hero__carrousel = ", hero_carrousel.length);

  hero__radio__input.forEach(elm => {
    console.log("elm.id_carrousel = ", elm.dataset.id_carrousel);

    elm.addEventListener("mousedown", function() {
      console.log(elm.dataset.id_carrousel);

      
      hero_carrousel.forEach(image => {
        image.classList.remove("hero__carrousel--active");

        if(image.dataset.id_carrousel === elm.dataset.id_carrousel) {
          image.classList.add("hero__carrousel--active");
        }
      })
    })
  })

  let currentIndex = 0;
  setInterval(() => {
    hero_carrousel.forEach(image => {
      image.classList.remove("hero__carrousel--active");
    });

    hero_carrousel[currentIndex].classList.add("hero__carrousel--active");

    if (hero__radio__input[currentIndex]) {
      hero__radio__input[currentIndex].checked = true;
    }

    currentIndex = (currentIndex + 1) % hero_carrousel.length;
  }, 5000);


  })()