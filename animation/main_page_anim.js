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
  $(this).toggleClass('active');
});
$('.change_theme-black').on('click', function(e) {
  e.preventDefault();
  $(location).attr('href', "?theme=1")
});
$('.change_theme-white').on('click', function(e) {
  e.preventDefault();
  $(location).attr('href', "?theme=2")
});

if (document.body.clientWidth <= 1040){
  $('.service_block-links-grid-container').toggleClass('service_block-links-flex-container');
  $('.service_block-links-flex-container').removeClass('service_block-links-grid-container');
}

function change_theme_on_black(){
	$('body').toggleClass('black');
  $('.service_links-link').toggleClass('black');
}