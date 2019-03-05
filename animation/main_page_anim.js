$('.top_bar-menu-btn').on('click', function(e) {
  e.preventDefault();
  $(this).toggleClass('top_bar-menu-btn_active');
  $('.top_bar-menu-main').toggleClass('top_bar-menu-main_active');
});

$('.top_bar-menu-profile-login').on('click', function(e) {
  e.preventDefault();
  $('.form-login_wrapper').toggleClass('form-login_wrapper_active');
});

$('.form-login_container_cancel').on('click', function(e) {
  e.preventDefault();
  $('.form-login_wrapper').removeClass('form-login_wrapper_active');
});

$('.change_theme').on('click', function(e) {
  e.preventDefault();
  change_theme_on_black();
  $theme_number = 1;
  console.log($theme_number);
});

if ($theme_number == 1){
	change_theme_on_black();
}

function change_theme_on_black(){
	$('body').toggleClass('black');
  $('.service_links-link').toggleClass('black');
}