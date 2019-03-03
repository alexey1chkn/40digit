
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