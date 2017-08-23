$("#success-alert").hide();
$("#danger-alert").hide();

$("#success-alert2").hide();
$("#danger-alert2").hide();

$("#success-alert3").hide();
$("#danger-alert3").hide();


$('#form1').on('submit', () => {
  event.preventDefault();
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : {action: 'addLot', dp: $('#dp').val(), bateau: $('#bateau').val(), idlot: $('#idlot').val(), prixdepart: $('#prixdepart').val(), espece: $('#espece').val(),
     taille: $('#taille').val(), presentation: $('#presentation').val(), qualite: $('#qualite').val(),
     bac: $('#bac').val(), poidbrut: $('#poidbrut').val(), dateenchere: $('#dateenchere').val(), codeetat: $('#codeetat').val()},
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
       if(data == "3"){
         alert("Error")
       }
     }
   })
})

$('#form2').on('submit', () => {
  event.preventDefault();
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : {action: 'addBateau', nom : $('#nomBateau').val(), immat: $('#immat').val()},
     success: (data, status) => {
       if(data == "1"){
         $("#success-alert2").show();
         $("#success-alert2").fadeTo(1500, 350).slideUp(350, () => {
         $("#success-alert2").slideUp(350);
         })
       }
       if(data == "2"){
         $("#danger-alert2").show();
         $("#danger-alert2").fadeTo(1500, 350).slideUp(350, () => {
         $("#danger-alert2").slideUp(350);
         })
       }
       if(data == "3"){
         alert("Error")
       }
       $('#nomBateau').empty();
       $('#immat').empty();
     }
   })
})

$('#form3').on('submit', () => {
  event.preventDefault();
  $.ajax({
     url : './class/controller.php',
     type : 'POST',
     data : {action: 'addSalle', nom : $('#nomSalle').val(), capacite: $('#capacite').val()},
     success: (data, status) => {
       if(data == "1"){
         $("#success-alert3").show();
         $("#success-alert3").fadeTo(1500, 350).slideUp(350, () => {
         $("#success-alert3").slideUp(350);
         })
       }
       if(data == "2"){
         $("#danger-alert3").show();
         $("#danger-alert3").fadeTo(1500, 350).slideUp(350, () => {
         $("#danger-alert3").slideUp(350);
         })
       }
       if(data == "3"){
         alert("Error")
       }
       $('#nomSalle').empty();
       $('#capacite').empty();
     }
   })
})
