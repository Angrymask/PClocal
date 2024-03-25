$(document).ready(function(){
  $('.mover-titulo').click(function(){
      // Roda o título
      $(this).css({'transform': 'rotate(' + (Math.random() * 360) + 'deg)'});

      // Calcula posições aleatórias
      var posX = Math.random() * ($(document).width() - $(this).width());
      var posY = Math.random() * ($(document).height() - $(this).height());

      // Move o título para posições aleatórias
      $(this).animate({left: posX, top: posY}, 1000);
  });
});
