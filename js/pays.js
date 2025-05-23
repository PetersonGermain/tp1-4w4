(function(){
  console.log("Vive JavaScript");
  let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
  const domaine = window.location.href
  let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
  const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
  console.log("categorie_ul_li.length", categorie__ul__li.length);
  mon_fetch(apiUrl);
  categorie__ul__li.forEach(li => {
    li.addEventListener("mousedown", function(){
      console.log(li.dataset.id)
      categoryId = li.dataset.id
      apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
      mon_fetch(apiUrl);
      categorie__ul__li.forEach(li => li.classList.remove("click"));
      li.classList.add("click");
    })
  })

  function mon_fetch(apiUrl) {

  fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
          const destinationList = document.querySelector('.destination__list');
          destinationList.innerHTML = "";
          data.forEach(article => {
              const articleElement = document.createElement('div');
              const radioId = `destination_radio_${article.id}`;
              articleElement.innerHTML = `
                  <input type="checkbox" id="${radioId}" class="destination__checkbox">
                  <h3 class="titre">${article.title.rendered} <label for="${radioId}"> &#9660;</label></h3>
                  <p class="description">${article.excerpt.rendered}</p>
                  <a href="${article.link}">Lire plus</a>
              `;
              destinationList .appendChild(articleElement); 
          });
      })
      .catch(error => console.error('Erreur lors de la récupération des articles:', error));
  }
})()