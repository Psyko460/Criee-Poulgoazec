$("#success-alert").hide();
$("#danger-alert").hide();


function loadProfil(){
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : 'action=loadProfil',
     dataType : 'json',
     success: (json, status) => {
       $.each(json, (id, acheteur) => {
              $('input[name=login]').val(acheteur.login)
              $('input[name=pwd]').val(acheteur.pwd)
              $('input[name=rse]').val(acheteur.raisonSocialeEntreprise)
              $('input[name=adresse]').val(acheteur.adresse)
              $('input[name=ville]').val(acheteur.ville)
              $('input[name=cp]').val(acheteur.codePostale)
       })
     }
  });
}
$(loadProfil)

$("#form1").on('submit', () => {
  event.preventDefault();
  $.ajax({
     url : '../class/controller.php',
     type : 'POST',
     data : {action: 'updateProfil', login: $('input[name=login]').val(), rse: $('input[name=rse]').val(), adresse: $('input[name=adresse]').val(), ville: $('input[name=ville]').val(), cp: $('input[name=cp]').val()},
     success: (data, status) => {
       if(data == "1"){
         $("#success-alert").show();
         $("#success-alert").fadeTo(1500, 350).slideUp(350, () => {
         $("#success-alert").slideUp(350);
         })
       }
       if(data == "2"){
         $("#danger-alert").show();
         $("#danger-alert").fadeTo(1500, 350).slideUp(350, () => {
         $("#danger-alert").slideUp(350);
         })
       }
     }
   })
})
