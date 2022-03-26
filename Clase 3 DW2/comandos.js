function tabla(valor) {
    console.log("Imprimiendo la tabla del "+valor);
    for (let i = 1; i < 11; i++) {
        console.log(valor+"x"+i+"="+valor*i); 
    }
}
tabla(6);

console.log("___________________________________________");
console.log("___________________________________________");

//funcion del  ejercicio dos
console.log("Ejercicio dos");
function dosValores(inicio, fin) {
    let j=0;
    if (inicio>fin) {
        console.warn("Es imposible hacer los calcualos ya que el calculo de inicio es menor que el final")
    }
    else{
        for (let i = inicio; i<=fin; i++) {
            console.log("__________________________");
            console.log("Imprimiendo la tabla del "+inicio);
            for ( j = 1; j < 11; j++) {
                console.log(inicio+"x"+j+"="+inicio*j);
            }
            j=1
            inicio++; 
        }
    }
}
dosValores(1,9);