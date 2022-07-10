(function($){
    $("#frm_create").submit(function(ev){     
        $("#Valor > input").removeClass('is-invalid'); 
        $("#divFecha > input").removeClass('is-invalid'); 
        $.ajax({
            url : '/guardar',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data){
             alert('Guardado con éxito') 
             $("#inputValor").val("");
             $("#inputFecha").val("");              
            },
            error:  function(xhr){               
                if(xhr.status === 400){                                   
                   let json = JSON.parse(xhr.responseText);                
                    if(json.inputValor){
                        if(json.inputValor.length != 0){                    
                            $("#Valor > div").html(json.inputValor);
                            $("#Valor > input").addClass('is-invalid');
                        }
                    }
                    
                    if(json.inputFecha){
                        if(json.inputFecha.length != 0){                    
                            $("#divFecha > div").html(json.inputFecha);
                            $("#divFecha > input").addClass('is-invalid');
                        }
                    }
                        
                        
                        
                }
                
            },
        });
        ev.preventDefault();
    });
})(jQuery)