$("#success-alert").hide();
$("#danger-alert").hide();

var maxSalle;

function getAllSalle(){
$('#tSalle').empty()
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=getAllSalle',
     dataType : 'json',
     success: (json, status) => {
       $.each(json, (id, salle) => {
         if(salle.id!=null){
           $('#tSalle').append(
             '<tr><td>' + salle.id + '</td>'+
             '<td>' + salle.nom + '</td>'+
             '<td>' + salle.capacite + '</td>'
           )
         }
         maxSalle = salle.id;
       })
     }
  });
}

$(getAllSalle)

var personnes = []
function reloadPersonne () {
  $('#tPersonne').empty()
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=getAllInscrit',
     dataType : 'json',
     success: (json, status) => {
       personnes = json
       $.each(json, (id, acheteur) => {
         if(acheteur.id != null){
           $('#tPersonne').append(
             '<tr><td>' + acheteur.id + '</td>'+
             '<td>' + acheteur.login + '</td>'+
             '<td><input type="number" class="form-control" name="' + id + '" value="' + acheteur.salle + '" max="'+ maxSalle +'" min="1"></td>'+
             '<td><input type="button" class="btn btn-success" id="' + id + '" value="Accepter"></td></tr>'
           )
           $('#' + id).bind('click', postPersonneSalle)
         }
       })
     }
  });
}

$('#reload').bind('click', reloadPersonne)
$(reloadPersonne)


function postPersonneSalle () {
  var id = $(this).attr('id')
  var acheteur = personnes[id]
  acheteur.salle = $("input[name='" + id + "']").val()
  if (acheteur.salle>maxSalle) {
    $("#danger-alert").show();
    $("#danger-alert").fadeTo(1500, 350).slideUp(350, () => {
    $("#danger-alert").slideUp(350);
    $(reloadPersonne)
    })
    return;
  }
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : {action: 'postPersonneSalle', id: acheteur.id, salle: acheteur.salle},
     success: (data, status) => {
       if(data == "1"){
         $("#success-alert").show();
         $("#success-alert").fadeTo(1500, 350).slideUp(350, () => {
         $("#success-alert").slideUp(350);
         $(reloadPersonne)
         })
       }
       if(data == "2"){
         $("#danger-alert").show();
         $("#danger-alert").fadeTo(1500, 350).slideUp(350, () => {
         $("#danger-alert").slideUp(350);
         $(reloadPersonne)
         })
       }
       if(data == "3"){
         alert("Error")
       }
     }
   })
}

$('#resetSalle').on('click', () => {
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : {action: 'resetSalle'},
     success: (data, status) => {
       if(data==1){
         alert('Les salles sont à présent vide.')
         $(reloadPersonne)
       }
     }
   })
})
