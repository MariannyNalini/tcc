// FUNÇÕES GERAIS DA APLICAÇÃO, QUE SERAM USADAS EM TODAS AS TELAS

function Main() {
  var menu = $('nav.interna')
  var fixed = false;

  this.init = function() {
    set_scroll_trigger()
    animated_grid_hover()
  }

  function set_scroll_trigger(){
    $( window ).scroll(function(){
      fix_menu()
    })
  }

  function fix_menu(){
    var scroll_top = $( window ).scrollTop()

    menu.removeClass('fixed')

    if( ( scroll_top - menu.offset().top ) >= 0 ){
      fixed = true;
      menu.addClass('fixed')
    }
    else
    {
      fixed = false;
    }
      
  }

  function animated_grid_hover(){
    var block = $('.da-thumbs li')

    block.each(function(){
      $(this).hoverdir();
    })
  }

}

$(document).ready(function(){
  main = new Main()
  main.init()
});