$(document).ready(function(){
  $(".char")
  .addClass("no-print")
  .resizable()
  .draggable({stack: "div",start:function( event, ui ) {
    $(ui.helper[0]).removeClass("no-print");
  }})
  .each(function( index ) {    
    var $img = $(this).find('img');
        
    $(this).width($img.attr("width"));
    $(this).height($img.attr("height"));
    
  });
  $('header').css({ top: $.cookie("palletteY"), left: $.cookie("palletteY")}).draggable({ stop: function (event, ui) {
          $.cookie("paletteX", ui.position.left, { path: "/",expires: 7 });
          $.cookie("paletteY", ui.position.top, { path: "/",expires: 7 });          
  }});
});