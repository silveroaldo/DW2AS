function cargarPersonas() // carga datos de prueba al array Persona
{
console.log("cargando datos...");
url=rutaJSON+"personas/json.php";
$.getJSON(url, function(data, status){
  localStorage.setItem('personas',JSON.stringify(data));
});
personas=JSON.parse(localStorage.getItem('personas'));
if (personas==null)
{
  personas=[];
}
}
function getPersonasById(pid)
    {
        for (var i = 0; i < personas.length; i++) {
            if (personas[i].id==pid)
                {
                    return i;
                }
        }
        return -1;
    }
function borrarPersona(e)
{

  let idxe=e.target.attributes["data-idx"].value;
  /*
  personas.splice(idxe,1);
  persistirRegistros();
*/
url=rutaJSON+"personas/api.php?mod=delete&id="+idxe;
$.get(url,function(data, status){
//alert("Data: " + data + "\nStatus: " + status);
});
  limpiarTabla();
  cargarTabla();
}

function guardarPersona()
{
    let p={
      "id":document.getElementById('idx').value,
      "nombre": document.getElementById('nombre').value,
      "apellido":document.getElementById('apellido').value,
      "cin":document.getElementById('cin').value,
      "fenac":document.getElementById('fenac').value }
    //
    console.log(p);
    url=rutaJSON+"personas/api.php";
    $.post(url,p,
    function(data, status){
      //alert("Data: " + data + "\nStatus: " + status);
    });

    //
    limpiarForm();
    limpiarTabla();
    iniciarApp()

}
