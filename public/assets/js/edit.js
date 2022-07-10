(function($){
    $("#frm_update").submit(function(ev){     
        $("#valorUpdate > input").removeClass('is-invalid'); 
        $("#fechaUpdate > input").removeClass('is-invalid');  
        $.ajax({
            url : '/update',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data){
             alert('Guardado con éxito')  
            },
            error:  function(xhr){               
                if(xhr.status === 400){                                   
                   let json = JSON.parse(xhr.responseText);                
                    if(json.inputValorUpdate){
                        if(json.inputValorUpdate.length != 0){                    
                            $("#valorUpdate > div").html(json.inputValorUpdate);
                            $("#valorUpdate > input").addClass('is-invalid');
                        }
                    }
                    
                    if(json.inputFechaUpdate){
                        if(json.inputFechaUpdate.length != 0){                    
                            $("#fechaUpdate > div").html(json.inputFechaUpdate);
                            $("#fechaUpdate > input").addClass('is-invalid');
                        }
                    }
                        
                        
                        
                }
                
            },
        });
        ev.preventDefault();
    });
})(jQuery)
