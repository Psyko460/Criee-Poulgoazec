$("#success-alert").hide();
$("#danger-alert").hide();

var auctions = []
var auctionsTBD = []
function reloadAuctionsDay () {
  $('#enchereJour').empty()
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=loadOffer',
     dataType : 'json',
     success: (json, status) => {
       auctions = json
       $.each(json, (id, lot) => {
         if(lot.id_LOT == null){
           $('#alerteJour').empty()
           $('#alerteJour').append('<h4 style="color:red;">Aucune enchère disponible.</h4>')
         }else{
           $('#alerteJour').empty()
           $('#enchereJour').append(
             '<tr><td>' + lot.id_LOT + '</td>'+
             '<td>' + lot.datePeche + '</td>'+
             '<td>' + lot.Bateau + '</td>'+
             '<td>' + lot.prixMax + '€</td>'+
             '<td></td>'
           )
         }
       })
     }
  });
}
$('#reloadDay').bind('click', reloadAuctionsDay)
$(reloadAuctionsDay)

function reloadAuctionsValid () {
  $('#enchereValid').empty()
  $.ajax({
    url : './class/controller.php',
    type : 'POST',
    data : 'action=adminLoadOffer',
    dataType: 'json',
    success: (json, status) => {
        auctionsTBD = json
        $.each(json, (id, poster) => {
          if(poster.id == null){
            $('#alerteValid').empty()
            $('#alerte').append('<h4 style="color:red;">Aucune enchère disponible.</h4>')
          }else{
            $('#alerteValid').empty()
            $('#enchereValid').append(
              '<tr>'+
              '<td>' + poster.id + '</td>'+
              '<td>' + poster.Bateau + '</td>'+
              '<td>' + poster.DatePeche + '</td>'+
              '<td>' + poster.login + '</td>'+
              '<td>' + poster.prixEnchere + '€</td>'+
              '<td><input type="button" name="'+id+'" class="btn btn-success" id="'+id+'valid" value="V"></td>'+
              '<td></td></tr>'
              //<input type="button" name="'+id+'" class="btn btn-danger" id="' + id + 'unvalid" value="X">
            )
            $("#"+id+"valid").bind('click', ValidAuction)
            //$("#"+id+"unvalid").bind('click', UnvalidAuction)
          }
        })
    }
  })
}
$('#reloadValid').bind('click', reloadAuctionsValid)
$(reloadAuctionsValid)


function ValidAuction(){
    var id = $(this).attr('name')
    var lot = auctionsTBD[id]
    $.ajax({
       url : './class/controller.php',
       type : 'POST',
       data : {action: 'validAuction', id_LOT: lot.id, datePeche: lot.DatePeche, Bateau: lot.Bateau},
       success: (data, status) => {
         if(data == "1"){
           $("#success-alert").show();
           $("#success-alert").fadeTo(1500, 350).slideUp(350, () => {
           $("#success-alert").slideUp(350);
           $(reloadAuctionsValid)
           })
         }
         if(data == "2"){
           $("#danger-alert").show();
           $("#danger-alert").fadeTo(1500, 350).slideUp(350, () => {
           $("#danger-alert").slideUp(350);
           $(reloadAuctionsValid)
           })
         }
       }
     })
}
/*
UnvalidAuctionUrl = 'administration_unvalid.php'
function UnvalidAuction(){
    var id = $(this).attr('name')
    var lot = auctions[id]
    $.post(
    UnvalidAuctionUrl,
    lot,
    function(data){
        alert(data)
        //mettre une notif
    })
}
*/
