const toggleModeButton = document.getElementById("toggleMode");
const body = document.body;

toggleModeButton.addEventListener("click", () => {
  body.classList.toggle("dark-mode");
  $(".dark").css("color", "black");
});

$.ajax({
  url: "http://localhost/back-ciisa/api/v1/services.php",
  type: "GET",
  dataType: "json",
  headers: {
    Authorization: "Bearer ciisa",
  },
  contentType: "application/json; charset=utf-8",
  success: function (result) {
    result.data.forEach((element) => {
      $("#services").append(createCard(element));
    });
  },
  error: function (error) {
    console.log(error);
  },
});

$.ajax({
  url: "http://localhost/back-ciisa/api/v1/about-us.php",
  type: "GET",
  dataType: "json",
  headers: {
    Authorization: "Bearer ciisa",
  },
  contentType: "application/json; charset=utf-8",
  success: function (result) {
    console.log(result.data);
    createAboutUs(result.data);
  },
  error: function (error) {
    console.log(error);
  },
});

function createCard(dataCards) {
  parent = document.createElement("div");
  $(parent).addClass("col-md-6");
  card = document.createElement("div");
  $(card).addClass("card");
  cardBody = document.createElement("div");
  $(cardBody).addClass("card-body");
  cardTitle = document.createElement("h5");
  $(cardTitle).addClass("card-title");
  $(cardTitle).addClass("dark");
  $(cardTitle).text(dataCards.titulo.esp);
  cardText = document.createElement("p");
  $(cardText).addClass("card-text");
  $(cardText).addClass("dark");
  $(cardText).text(dataCards.texto.esp);
  cardBody.replaceChildren(cardTitle, cardText);
  card.replaceChildren(cardBody);
  parent.replaceChildren(card);
  return parent;
}

function createAboutUs(data) {
  misionTitulo = document.createElement("h2");
  $(misionTitulo).addClass("mb-3");
  $(misionTitulo).text(data.mision.titulo.esp);
  visionTitulo = document.createElement("h2");
  $(visionTitulo).addClass("mb-3");
  $(visionTitulo).text(data.vision.titulo.esp);
  mision = document.createElement("p");
  $(mision).addClass("fs-4 mb-3 lead");
  vision = document.createElement("p");
  $(vision).addClass("mb-5");
  $(mision).text(data.mision.contenido.esp);
  $(vision).text(data.vision.contenido.esp);
  $("#aboutUs").append(misionTitulo);
  $("#aboutUs").append(mision);
  $("#aboutUs").append(visionTitulo);
  $("#aboutUs").append(vision);
}
