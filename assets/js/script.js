


jQuery(function() {
  var header = jQuery(".navigationblock");
  jQuery(window).scroll(function() {    
      var scroll =   jQuery(window).scrollTop();
      if (scroll >= 90) {
          header.addClass("sticky");
      } else {
          header.removeClass("sticky");
      }
  });
  
  jQuery(".menubutton").click(function(e){
    console.log('run');
    jQuery("#mobile_menu").toggleClass( "open" )
    
  });
});



function reveal() {
  var reveals = document.querySelectorAll(".animate");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);