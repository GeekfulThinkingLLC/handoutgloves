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

    // add's class to selected button on product page
    jQuery('.one').on('click', function(){
      jQuery('.one').addClass('selected');
      jQuery('.cart-button').addClass('selected');
      jQuery('.two, .three, .four, .five').removeClass('selected');
    });
    jQuery('.two').on('click', function(){
      jQuery('.two').addClass('selected');
      jQuery('.cart-button').addClass('selected');
      jQuery('.one, .three, .four, .five').removeClass('selected');
    });
    jQuery('.three').on('click', function(){
      jQuery('.three').addClass('selected');
      jQuery('.cart-button').addClass('selected');
      jQuery('.one, .two, .four, .five').removeClass('selected');
    });
    jQuery('.four').on('click', function(){
      jQuery('.four').addClass('selected');
      jQuery('.cart-button').addClass('selected');
      jQuery('.one, .two, .three, .five').removeClass('selected');
    });
    jQuery('.five').on('click', function(){
      jQuery('.five').addClass('selected');
      jQuery('.cart-button').addClass('selected');
      jQuery('.one, .two, .three, .four').removeClass('selected');
    });
    jQuery('.model-btn').change(function() {
      jQuery('.model-btn').addClass('selected');
    });
    jQuery('.quantity-btn').change(function() {
      jQuery('.quantity-btn').addClass('selected');
    });
    jQuery('.form-group input').blur(function() {
      if( !jQuery(this).val() ) {
        jQuery('.quantity-btn').removeClass('selected');
      }
    });

    
  
  });