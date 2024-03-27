
const cloud = document.getElementById("cloud");
const barraLateral = document.querySelector(".barra-lateral"); /* Obtenemos la referencia al primer elemento que coincida con el parámetro */
/*const span = document.querySelector("span"); /* sólo selecciona el primer span que encuentre */
const spans = document.querySelectorAll("span");
const palanca = document.querySelector(".switch");
const circulo = document.querySelector(".circulo");
const menu = document.querySelector(".menu");
const main = document.querySelector("main");

menu.addEventListener("click",()=>{
    barraLateral.classList.toggle("max-barra-lateral");
    if (barraLateral.classList.contains("max-barra-lateral")) {
        menu.children[0].style.display = "none";
        menu.children[1].style.display = "block";
    }
    else {
        menu.children[0].style.display = "block";
        menu.children[1].style.display = "none";
    }

    if (window.innerWidth<=320) {
        barraLateral.classList.add("mini-barra-lateral");
        main.classList.add("min-main");
        spans.forEach((span)=> {
            span.classList.add("oculto");
        })
    }
});

palanca.addEventListener("click",()=> {
    let body = document.body;
    body.classList.toggle("dark-mode-navbar");
    circulo.classList.toggle("prendido");
});

cloud.addEventListener("click",()=>{ /* acción, función que se ejecuta al realizar la acción*/
    /*alert("Hola");*/
    barraLateral.classList.toggle("mini-barra-lateral"); /* toggle añade clase mini a la barra, en caso de que ya la tenga lo elimina */
    /* span.classList.toggle("oculto"); /* sólo selecciona el primer span que encuentre */
    main.classList.toggle("min-main");
    spans.forEach(span => {
        span.classList.toggle("oculto");
    });
});