// Obtener las etiquetas <a> específicas
const aAll = document.querySelector(".submenu-a.all");
const aPay = document.querySelector(".submenu-a.pay");

// Añadir estilos a los botones de pestaña en función de la vista para resaltar en qué vista está el usuario
function resaltarBoton(elemento) {
    elemento.classList.add("btn-activo");
}

// Quitar estilos de los botones de pestaña
function quitarResaltado() {
    aAll.classList.remove("btn-activo");
    aPay.classList.remove("btn-activo");
}

// Verificar si la URL actual contiene el fragmento que identifica la vista específica 
function verificarVista() {
    const urlActual = window.location.href;
    if (urlActual.includes("estatuscfdi_all")) {
        quitarResaltado();
        resaltarBoton(aAll);
    } else if (urlActual.includes("estatuscfdi_pay")) {
        quitarResaltado();
        resaltarBoton(aPay);
    }
}

// Llamar a la función para verificar la vista cuando se carga la página
verificarVista();
