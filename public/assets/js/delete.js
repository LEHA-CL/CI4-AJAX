$(document).ready(function(){
    $(".btn-delete").click(function(ev){
        borrar(ev);
    });
});

function borrar(ev){                      
    let id = ev.target.attributes['data-id'].value              
    if (confirm('¿Seguro que desea eliminar el registro?')) 
    { 
        $.get( `delete/${id}`, function( data ) {         
            recargar();
            
        });
        
    } else {
        // Pressed Cancel.
    }    
    
}

function recargar(){       
    $.ajax({
       url:'/recargar',
       method:'get',
       dataType:'json',
       data: $(this).serialize(),
       success : function(response){                       
          if(response.length> 0){                     
              $('#t-body').empty();   
              let tbody = $('#t-body');                       
              response.forEach(element => {
              let tr = $('<tr> </tr>');  
              let td = $('<td></td>').attr('id',element.id).append(element.id);   
              let td1 = $('<td></td>').append(element.indicador);  
              let td2 = $('<td></td>').append(element.valor);
              let td3 = $('<td></td>').append(element.fecha_ingreso);    
              let td4 = $('<td>  </td>');           
              td4.append($(`<a href=http://crud.test/edit/${element.id} class="btn btn-warning" type="button" > </a>`).append('Editar '));
              td4.append($(`<button class="btn btn-danger btn-delete" data-id="${element.id}"type="button">Borrar </button>`).click(function(ev){borrar(ev)}));            
              tr.append(td,td1,td2,td3,td4);             
              tbody.append(tr);                 
             });
          }
          else {
            $('#t-body').empty();  
          }    
      }
     
    });   
}




