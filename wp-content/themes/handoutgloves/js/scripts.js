jQuery( document ).ready(function() {
  
    // Open navbarSide when button is clicked
    jQuery('#side-nav-button').on('hover', function() {
      jQuery('#navbarSide').addClass('reveal');
      jQuery('.overlay').show();
      jQuery('#side-nav-button').hide();
    });
  
    // Close navbarSide when the outside of menu is clicked
    jQuery('.overlay').on('click', function(){
      jQuery('#navbarSide').removeClass('reveal');
      jQuery('.overlay').hide();
      jQuery('#hide-on-click').removeClass('hide-on-click');
      jQuery('#side-nav-button').delay(400).fadeIn();
    });

    jQuery('#hide-on-click').on('click', function(){
      jQuery('#hide-on-click').addClass('hide-on-click');
    })
  
  });