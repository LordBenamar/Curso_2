/*
    ¿Que son selectores?
    Los selectores permiten seleccionar elementos del DOM (elementos HTML) para manipularlos en una página web.
    
    los selectores comunes son:
    
    Seleccion individual
    .getElementById("id"): selecciona un elemento con un id específico.

    Seleccion multiple
    .getElementsByName("name"): selecciona todos los elementos que contengan un name especifico.
    .getElementsByClassName("class"): selecciona todos los elementos con una clase específica.
    .getElementsByTagName("div"): selecciona todos los elementos con un nombre de etiqueta específico.

    Sintaxis:

    document" es el objeto principal del DOM(Modelo de Objeto del Documento) que representa el 
    documento HTML actual en una página.


    Seleccion individual
    document.getElementById("id");

    Seleccion multiple
    document.getElementsByName("name");
    document.getElementsByClassName("class");
    document.getElementsByTagName("div");

}






    Los selectores se emplean junto a metodos para realizar diferentes acciones.
*/


// Guardando elemento de id "parrafo" en una variable llamada parrafo
// esta variable se usa en varias ocaciones mas adelante.
let parrafo = document.getElementById("parrafoDelHTML");


// alert(parrafo.innerText);

parrafo.innerText = "Este texto ha cambiado";





let titulo = document.getElementsByTagName("h1")[0];
// alert(titulo.innerText)
titulo.innerText = "Ahora este titulo ha cambiado mediante un selector en JavaScript"
// alert(titulo.innerText);




//Medotos usados con selectores:

// elemento.getAttribute: obtiene el(los) valor(es) del atributo indicado en el elemento seleccionado.
console.log(parrafo.getAttribute("class"));




// elemento.setAttribute: establece un atributo con su valor en el elemento seleccionado.
parrafo.setAttribute("nuevoAtributo","color-rojo fondo-verde");

// Si la propiedad/atributo existen seran remplazados
parrafo.setAttribute("class","text-green-300 bg-yellow-900");



// innerHTML: Permite leer, y modificar el contenido HTML interno de un elemento.

//Obteniendo elemento:
let cajaVacia = document.getElementById("caja_vacia");

//Mutando el contenido interno del elemento
cajaVacia.innerHTML = `
<p>Hola este parrafo se agrego con innerHTML 1</p>
<p>Hola este parrafo se agrego con innerHTML 2</p>
<p>Hola este parrafo se agrego con innerHTML 3</p>
<p>Hola este parrafo se agrego con innerHTML 4</p>
<p>Hola este parrafo se agrego con innerHTML 5</p>
<p>Hola este parrafo se agrego con innerHTML 6</p>
`;

// Debes tener cuidado al usar innerHTML ya que puede sobreescribir TODO el contenido de un elemento.
// cajaVacia.innerHTML = "Nada"






// elemento.style: permite acceder y manipular las propiedades CSS del elemento seleccionado.

cajaVacia.style.width = "100vw";
cajaVacia.style.display = "flex";
cajaVacia.style.flexDirection = "column"
cajaVacia.style.alignItems = "center";






// elemento.classList: permite agregar(add), eliminar(remove) y verificar(contains) 
// las clases CSS del elemento seleccionado.

// Comprobar si el elemento tiene la clase llamada cajaJavaScript

cajaVacia.classList.contains("cajaJavaScript")
    ? console.log("La caja si tiene la clase indicada")
    : console.log("La caja NO tiene la clase indicada");

// Validamos si el elemento "cajaVacia" contiene la clase "cajaJavaScript"
// En caso de ser true la respuesta, entonces se aplica el fondo azul y borde amarillo oscuro
// En caso de ser false la respuesta, entonces se aplica el fondo rojo y borde verde oscuro
if(cajaVacia.classList.contains("cajaJavaScript")){
    cajaVacia.classList.add("bg-sky-700", "border-2", "border-yellow-800", "border-solid");
}else{
    cajaVacia.classList.add("bg-red-700", "border-2", "border-green-800", "border-solid");
}


cajaVacia.classList.remove("bg-sky-700");
cajaVacia.classList.add("bg-green-700");







// document.createElement("p"): Permite crear un elemento (sin asignacion) en el DOM

// elemento.appendChild: agrega un nodo hijo a un elemento seleccionado.


//Crear un nuevo elemento (Sin contenido aun)
let nuevoNodoHijo = document.createElement("h1");
let nuevoParrafo2 = document.createElement("span");
let nuevoParrafo3 = document.createElement("p");

// Cargando de informacion los elementos creados previamente

// usar con: botones, option, li, etc
nuevoNodoHijo.innerText = "Dale una oportunidad a tu cerebro de entender todo poco a poco, pedazo a pedazo, seria imposible entender todo a la primera, intenta primero solo con una parte y hasta que no la entiendas bien bien bien, no te enfoques demasiado en lo demas";

// Se recomienda usar con contenedores: div, aside, section, aside, main, footer, form.
nuevoParrafo2.innerHTML = "Contenido agregado usando innerHTML";

// Usar con elementos de texto: p, h1-h6, span, label, a y similares
nuevoParrafo3.textContent = "Este contenido se agrego usando textContent";


let caja = document.getElementById("cajaPadre");

caja.appendChild(nuevoNodoHijo);
caja.appendChild(nuevoParrafo2);
caja.appendChild(nuevoParrafo3);




// elemento.removeChild: elimina un nodo hijo de un elemento seleccionado.

caja.removeChild(nuevoParrafo2);