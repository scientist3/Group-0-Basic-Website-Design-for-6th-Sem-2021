$(document).ready(function(){
  
  $('#signin-tag').on("click", function(){
    $("#signin-div").addClass("show").removeClass("hide");
    
    $("#signup-div").addClass("hide").removeClass("show");

    $("#signin-tag").addClass('active').removeClass("inactive").removeClass("underlineHover");
    $("#signup-tag").addClass('inactive').removeClass("active").addClass("underlineHover");

  });

  $('#signup-tag').on("click", function(){
    $("#signin-div").addClass("hide").removeClass("show");
    
    $("#signup-div").addClass("show").removeClass("hide");

    $("#signup-tag").addClass('active').removeClass("inactive").removeClass("underlineHover");

    $("#signin-tag").addClass('inactive').removeClass("active").addClass("underlineHover");
  });
});