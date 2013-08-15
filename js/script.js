$(document).ready(function(){
    $('#boton').click(function(){
	    var variable=$("#car").val();
	    var variable2=$("#com").val();
        var numvar = variable2.length;
        if (numvar<=400) 
        {  
    	    $.post("ingresar.php",{carrera:variable,coment:variable2},function(data){
            $("#salida").html(data);
            });
                $("#car").val("");
                $("#com").val("");
                
        }
        else{
            alert('El comentario es mayor de 400 caracteres');
        };
    });
    $('#com').click(function(){
        $(this).css('height','150');
    });
});
 