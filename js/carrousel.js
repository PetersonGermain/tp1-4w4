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


  })()