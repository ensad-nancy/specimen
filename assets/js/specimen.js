$(document).ready(function(){
  $(".char").draggable({stack: "div"}).resizable();
  $('header').css({ top: $.cookie("palletteY"), left: $.cookie("palletteY")}).draggable({ stop: function (event, ui) {
          $.cookie("paletteX", ui.position.left, { path: "/",expires: 7 });
          $.cookie("paletteY", ui.position.top, { path: "/",expires: 7 });          
  }});
});