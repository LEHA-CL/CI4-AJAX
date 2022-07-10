$(document).ready(function(){
    $("#btn-delete").click(function(){
        let id;       
        id = $('#btn-delete').data('id');      
         $.get( `delete/${id}`, function( data ) {
           confirm('Esta seguro que desea borrar el registro');

        });
    });
});

// $(document).ready(function(){
 
//     $('#btn-delete').click(function(){
//      $.ajax({
//         url:'recargar',
//         method:'get',
//         dataType:'json',
//         data: $(this).serialize(),
//         success : function(response){
//             console.log(response.length);
//             $('td').empty();
//             if(response.length> 0){
//             $('td').append('hola');
//             $('td').append('hola');
//             $('td').append('hola');

                
 
//          }
   
//        }
//      });
//    });
// })





