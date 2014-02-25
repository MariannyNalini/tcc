// FUNÇÕES GERAIS DA HOME DA APLICAÇÃO

function Home() {
  var menu = $('nav.interna')
  var fixed = false;

  this.init = function() {
    full_tree_trigger()
    set_menu_buttons()
  }

  function full_tree_trigger(){
    full_tree()

    $(window).resize( full_tree )
  }

  function full_tree(){
    var window_w = $(window).width();
    var wrapper_w = 960;
    var tree_cont_w = ( window_w - wrapper_w ) / 2;

    var tree_cont = $('header .tree-cont');

    tree_cont.css({
      width: tree_cont_w,
      left: -(tree_cont_w)
    })
  }

  function set_menu_buttons() {
    $(".menu_button").click(function(e) {
      e.preventDefault();

      var element = $(e.currentTarget);

      var id = element.attr('href').replace("#", "");

      var anchor = $('a[name='+id+']');

      $(window).scrollTop(anchor.offset().top - ((anchor.offset().top >= menu.offset().top && !fixed) ? menu.outerHeight() : 0));
    })
  }
}

$(document).ready(function(){
  home = new Home()
  home.init()
});