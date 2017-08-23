 $(document).ready (function(){
            $("#success-alert").hide();
            $("#danger-alert").hide();


var auctions = []
function reloadAuctions () {
  $('#enchere').empty()
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=loadOffer',
     dataType : 'json',
     success: (json, status) => {
       auctions = json
       $.each(json, (id, lot) => {
         if(lot.id_LOT == null){
           $('#alerte').empty()
           $('#alerte').append('<h4 style="color:red;">Aucune enchère disponible.</h4>')
         }else{
           $('#alerte').empty()
           $('#enchere').append(
             '<tr><td>' + lot.id_LOT + '</td>'+
             '<td>' + lot.datePeche + '</td>'+
             '<td>' + lot.Bateau + '</td>'+
             '<td>' + lot.prixMax + '€</td>'+
             '<td><input type="number" class="form-control" name="' + id + '" value="'+ lot.prixMax +'" min="'+ lot.prixMax +'" step="0.5"></td>'+
             '<td><input type="button" class="btn btn-success" id="' + id + '" value="Enchérir"></td></tr>'
           )
           $('#' + id).bind('click', postAuction)
         }
       })
     }
  });
}

$('#reload').bind('click', reloadAuctions)
$(reloadAuctions)

function postAuction () {
  var id = $(this).attr('id')
  var lot = auctions[id]
  lot.enchere = $("input[name='" + id + "']").val()
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : {action: 'postOffer', id_LOT: lot.id_LOT, datePeche: lot.datePeche, Bateau: lot.Bateau, enchere: lot.enchere},
     success: (data, status) => {
       if(data == "1"){
         $("#success-alert").show();
         $("#success-alert").fadeTo(1500, 350).slideUp(350, () => {
         $("#success-alert").slideUp(350);
         $(reloadAuctions)
         })
       }
       if(data == "2"){
         $("#danger-alert").show();
         $("#danger-alert").fadeTo(1500, 350).slideUp(350, () => {
         $("#danger-alert").slideUp(350);
         $(reloadAuctions)
         })
       }
       if(data == "3"){
         alert("Error")
       }
     }
   })
}


});
