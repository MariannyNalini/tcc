// FUNÇÕES GERAIS DA HOME DA APLICAÇÃO

var Home = (function() {
  return {
    init: function() {
      this.grid_hovers()
    },

    grid_hovers: function(){
      $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
    }
  }
})();

$(document).ready(function(){
  Home.init()
});