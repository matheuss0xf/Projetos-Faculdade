(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  });
})(jQuery);

$(document).ready(function(){
  $('#cpf').mask('000.000.000-00', {reverse: true});
  $('#tell').mask('(00)00000-0000');
  $('#codColeira').mask('AAAA-0000-0000-A0');
});