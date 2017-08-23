function reloadAuctionsPerPerson () {
  $('#nbEnchereValide').empty()
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=nbEnchereParAcheteur',
     dataType : 'json',
     success: (json, status) => {
       $.each(json, (id, acheteur) => {
         if(acheteur.login == null){
           $('#alerteStats1').empty()
           $('#alerteStats1').append('<h4 style="color:red;">Aucune statistique par personne disponible.</h4>')
         }else{
           $('#alerteStats1').empty()
           $('#nbEnchereValide').append(
             '<tr><td>' + acheteur.login + '</td>'+
             '<td>' + acheteur.nbEnchereValide + '</td>'+
             '<td></td>'
           )
         }
       })
     }
  });
}
$('#reloadAuctionsPerPerson').bind('click', reloadAuctionsPerPerson)
$(reloadAuctionsPerPerson)

function reloadStats () {
  $('#statsBody').empty()
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=statistique',
     dataType : 'json',
     success: (json, status) => {
       $.each(json, (id, stats) => {
         if(stats.login == null){
           $('#alerteStats2').empty()
           $('#alerteStats2').append('<h4 style="color:red;">Aucune statistique global disponible.</h4>')
         }else{
           $('#alerteStats2').empty()
           $('#statsBody').append(
             '<tr><td>' + stats.login + '</td>'+
             '<td>' + stats.timesConnect + '</td>'+
             '<td>' + stats.lastConnect + '</td>'+
             '<td>' + stats.avgEnchere + ' €</td>'+
             '<td></td>'
           )
         }
       })
     }
  });
}
$('#reloadStats').bind('click', reloadStats)
$(reloadStats)
