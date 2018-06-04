$(document).ready(function()
{
    $("#action").on("click", function(event)
    {
        event.preventDefault();
       //Cargamos el contenido del enlace
        $('#content').load(this.href);
    });
});