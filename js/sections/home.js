// FUNÇÕES GERAIS DA HOME DA APLICAÇÃO

function Home() {
  var menu = $('nav.interna')

  this.init = function() {
    full_tree_trigger()
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

}

$(document).ready(function(){
  home = new Home()
  home.init()
});