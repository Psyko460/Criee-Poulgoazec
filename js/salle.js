function getSalle(){
  $('#numeroSalle').empty();
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=getSalle',
     dataType : 'json',
     success: (json, status) => {
       $.each(json, (id, salle) => {
         if(salle.salle == null ) {
           $('#numeroSalle').append('Aucune salle pour le moment, veuillez vous inscrire.')
         }
         if(salle.salle == 0) {
           $('#inscription').hide()
           $('#numeroSalle').append('Inscription prise en compte, en attente.')
         }
         if(salle.salle>0){
           $('#inscription').hide()
           $('#numeroSalle').append('Vous êtes dans la salle numéro : ' + salle.salle + '.')
         }
       })
     }
  });
}
$(getSalle)

$('#inscription').on('click', () => {
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=inscriptionSalle',
     dataType : 'json',
     success: (data, status) => {
       if(data=='1'){
         alert('Inscription prise en compte');
       }
     }
  });
})
