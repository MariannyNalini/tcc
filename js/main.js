var Main = (function() {
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
  Main.init()
});