  var $ = require('jquery');

  $(document).ready(function() {

    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);

      $.ajax({
      'url' : 'http://localhost:8888/esercizi/php-dischi/version_ajax/data.php',
      'method' : 'GET',
      'success' : function(data) {
        // console.log(data);
        var dischi = JSON.parse(data);
        // console.log(dischi);
        for (var i = 0; i < dischi.length; i++) {
          var disco = dischi[i];
          // console.log(disco);
          var context = {
            cover_img: disco.img_copertina, /*disco['img_copertina']*/
            title: disco.titolo, /*disco['titolo']*/
            artist: disco.artista, /*disco['artista']*/
            year: disco.anno /*disco['anno']*/
          };
          var html = template(context);
          $('.container_albums').append(html);
        }

      },
      'error' : function() {
        alert('si è verificato un errore');
      }


    })

  });
