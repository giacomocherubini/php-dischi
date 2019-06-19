var $ = require('jquery');

$(document).ready(function() {

    $.ajax({
    'url' : 'http://localhost:8888/esercizi/php-dischi/version_ajax/data.php',
    'method' : 'GET',
    'success' : function(data) {
      console.log(JSON.parse(data));
      // for (var i = 0; i < dischi.length; i++) {
      //   var dischi = dischi[i];
      //   var
      // }
    },
    'error' : function() {
      alert('ciao');
    }


  })

});
