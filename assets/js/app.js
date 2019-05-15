// Chargement de jquery
$(document).ready(function () {

  // carousel projet owl carousel
$('.owl-carousel').owlCarousel({
  items: 1,
  loop: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 16000,
  autoplayHoverPause: true,
  nav: false,
  dots: false,
  URLhashListener: true,
  startPosition: 'URLHash'
})

$('.owl-project').owlCarousel({
  items: 1,
  loop: true,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  autoHeight: true,
  nav: false,
  dots: true, 
  stagePadding: 50,
  margin: 10,
  smartSpeed: 550,
})

  // stock des variable conteneu de ma photo de profil
  var photo = $('#photoProfil');
  var photo2 = $('#photoProfil2');

  // début de la requete ajax pour recuperer ma photo de profil
  $.ajax({

    // type de document recuperer
    dataType: "json",
    // url du document récupérer
    url: "https://spreadsheets.google.com/feeds/list/1-oYlvGP573O4ml4AzgapLhK_KoEqlfDIzvSnWz48_nQ/od6/public/values?alt=json",

    // fonction qui gere la reussite de la recupération de la données voulu
    success: function (data) {
      // Affiche l'image recuperer par la requete ajax dans l'id photoProfil 1 et 2
      photo.html('<img alt="photo de profil mickael pol" class="img-responsive img-rounded" src="' + data.feed.entry[9].gsx$url.$t + '"/>');
      photo2.html('<img alt="photo de profil mickael pol" class="img-responsive img-rounded" src="' + data.feed.entry[9].gsx$url.$t + '"/>');

    },

    error: function () { // renvoi d'erreur si la photo n'est pas bien ou pas recupérer
      photo.html("erreur");
      photo2.html("erreur");
    }

  });
  //Fin de ma requete ajax 


  var starHtml = document.getElementById('starHtml');
  var starBoot = document.getElementById('starBoot');
  var starJs = document.getElementById('starJs');
  var starPhp = document.getElementById('starPhp');
  var starMysql = document.getElementById('starMysql');
  var starScrum = document.getElementById('starScrum');
  var wordpress = document.getElementById('starWp');
  var prestashop = document.getElementById('starPresta');


  function addEtoile(emp, starGold, starBlack) {
    var icoGold = '<i class="fa fa-star gold"></i>';
    var icoBlack = '<i class="fa fa-star black"></i>';
    emp.innerHTML = icoGold.repeat(starGold) + icoBlack.repeat(starBlack);
  }

  addEtoile(starHtml, 4, 1);
  addEtoile(starBoot, 5, 0);
  addEtoile(starJs, 4, 1);
  addEtoile(starPhp, 4, 1);
  addEtoile(starMysql, 4, 1);
  addEtoile(starScrum, 3, 2);
  addEtoile(wordpress, 3, 2);
  addEtoile(prestashop, 3, 2);

  // Gestion du formulaire de conatct
  $('#characterLeft').text('280 caractères restant');
  $('#message').keydown(function () {
    var max = 280;
    var len = $(this).val().length;
    if (len >= max) {
      $('#characterLeft').text('Vous avez atteint la limite');
      $('#characterLeft').removeClass('text-contact');
      $('#characterLeft').addClass('red');
      $('#btnSubmit').addClass('disabled');
    } else {
      var ch = max - len;
      $('#characterLeft').text(ch + ' caractères restant');
      $('#btnSubmit').removeClass('disabled');
      $('#btnSubmit').addClass('text-contact');
      $('#characterLeft').removeClass('red');
    }
  });


  $('#cvPdf').mouseover(function () {
    $('#cvPdf').popover({
      trigger: "hover"
    });
    $('#pop').popover({
      placement: 'bottom',
      content: 'Télécharger le CV au format PDF',
    });
    $('#pop').popover('show');
  });

  $('#cvPdf').mouseleave(function () {
    $('#pop').popover("hide");
  });

  $('#github').mouseover(function () {
    $('#github').popover({
      trigger: "hover"
    });
    $('#pop2').popover({
      placement: 'bottom',
      content: 'Visiter mon repo GITHUB',
    });
    $('#pop2').popover('show');
  });

  $('#github').mouseleave(function () {
    $('#pop2').popover("hide");
  });

});