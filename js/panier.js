var panier = []
function loadPanier(){
  $('#tabPanier').empty()
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=loadBasket',
     dataType : 'json',
     success: (json, status) => {
       $.each(json, (id, lot) => {
         if(lot.id == null){
           $('#alerte').empty()
           $('#alerte').append('<h4 style="color:red;">Aucune enchère dans votre panier.</h4>')
         }else{
           $('#alerte').empty()
           $('#tabPanier').append(
             '<tr><td>'+lot.id+'</td>'+
             '<td>' + lot.DatePeche + '</td>'+
             '<td>' + lot.dateEnchere + '</td>'+
             '<td>' + lot.specification + '</td>'+
             '<td>' + lot.libelle + '</td>'+
             '<td>'+lot.tare+'</td>'+
             '<td>'+lot.prixEnchere+'</td></tr>'
           )
         }
       })
     }
  });
}
$(loadPanier)
