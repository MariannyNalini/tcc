// FUNÇÕES GERAIS DA APLICAÇÃO, QUE SERAM USADAS EM TODAS AS TELAS

function Main() {
  var menu = $('nav.interna')

  this.init = function() {
    set_scroll_trigger()
  }

  function set_scroll_trigger(){
    $( window ).scroll(function(){
      fix_menu()
    })
  }

  function fix_menu(){
    var scroll_top = $( window ).scrollTop()

    menu.removeClass('fixed')

    if( ( scroll_top - menu.offset().top ) >= 0 )
      menu.addClass('fixed')
  }

}

$(document).ready(function(){
  main = new Main()
  main.init()
});