require('./bootstrap');
(function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

// function validationsss () {

//        var name = document.invio.name.value;
//        var alcohol_content = document.invio.alcohol_content.value;
//        var description= document.invio.description.value;
//        var price = document.invio.price.value;
//        var img_url = document.invio.img_url.value;
//        var origin = document.invio.origin.value;

//        if ((name == "") || (name.length < 30)) {
//           alert("Devi inserire un nome e che non abbia più di 30 caratteri!");
//           document.invio.name.focus();
//           return false;
//        }
//        if ((!isNaN(alcohol_content)) || (alcohol_content.length < 4) || alcohol_content == "") {
//           alert("Devi inserire la gradazione alcolica espressa in percentuale, attenzione non deve superare le 4 cifre!");
//           document.invio.alcohol_content.value = "";
//           document.invio.alcohol_content.focus();
//           return false;
//        }

//        if ((description == "") || (description > 1000)){
//           alert("Devi inserire una descrizione di massimo 1000 caratteri!");
//           document.invio.description.focus();
//           return false;
//        }

//        if ((price == "") || (price == "undefined") || price.length > 6)
//        {
//         alert("Scegli un prezzo, massimo 6 caratteri");
//         document.invio.price.focus();
//         return false;
//        }

//        if ((img_url == "") || (img_url == "undefined") || img_url.length > 2048) {
//           alert("L'URL dell'immagine può avere massimo 2048 caratteri!");
//           document.invio.img_url.focus();
//           return false;
//         }
//         if (origin == "" || origin.length > 25) {
//            alert("Inserisci l'origine, massimo 25 caratteri!");
//            document.invio.origin.value = "";
//            document.invio.origin.focus();
//            return false;
//         }
//         else {
//           document.invio.action = "#";
//           document.invio.submit();
//        }
//     }
