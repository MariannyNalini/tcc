// FUNÇÕES GERAIS DA APLICAÇÃO, QUE SERAM USADAS EM TODAS AS TELAS

var Main = (function() {
  return {
    init: function() {
      console.log('init app') 
    }
  }
})();

$(document).ready(function(){
  Main.init()
});