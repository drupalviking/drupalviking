  var menu_open = false;
  jQuery('#toggle-menu-button').click(function(){
  if(menu_open == false){
  jQuery("#main-menu-toggle").addClass("toggle-menu-open");
  jQuery("#page").addClass("page-to-right");
  menu_open = true;
  }else{
  jQuery("#main-menu-toggle").removeClass("toggle-menu-open");
  jQuery("#page").removeClass("page-to-right");
  menu_open = false;
  }
  });

  jQuery('.toggle-menu-close').click(function(){
  if(menu_open == true){
  jQuery("#main-menu-toggle").removeClass("toggle-menu-open");
  jQuery("#page").removeClass("page-to-right");
  menu_open = false;
  }
  });

  jQuery(document).ready(function(){
        jQuery('#flexslider-post').flexslider({
          controlNav: false,
          directionNav: true,
          animation : 'fade',
          slideshowSpeed :5000,
    });
    jQuery('.flexslider-post').flexslider({
                    controlNav: true,
                    directionNav: false,
                    animation : 'fade',
                    slideshowSpeed :5000,
    });

  });