			</div>
		<footer class="<?php echo $dark_style ?>">
			<div id="footer">
				<div class="footer contacts">
					<h2>Информация</h2>
					<a href="https://vk.com/40digit">Мы во вконтакте: <i class="fab fa-vk"></i></a>
					<a href="">О компании</a>
					<a href="">Контакты</a>
					<a href="">Карьера в 40digit</a>
					<a href="">Акции и скидки</a>
					<a href="">Мерч</a>
				</div>				
				<div class="footer to_partners">
				<h2>Партнёрам</h2>
					<a href="">Условия и цены</a>
					<a href="">Для профессионалов</a>
					<a href="">Реферальная программа</a>
					<a href="">Для интеграторов</a>
					<a href="">Кооперация</a>
				</div>
				<div class="footer services">
					<h2>Услуги</h2>
					<a href="">Разработка сайтов</a>
					<a href="">Разработка приложений</a>
					<a href="">Обслуживание</a>
					<a href="">Вычислительные мощности</a>
					<a href="">Продвижение в соц. сетях(SMM)</a>
					<a href="">SEO - продвижение</a>
					<a href="">Дизайн</a>
					<a href="">Трафик</a>
					<a href="">Рестайлинг</a>
					<a href="">Безопасность</a>
				</div>
				<div class="footer docs">
					<h2>Помощь</h2>
					<a href="">FAQ</a>
					<a href="">Документация</a>
					<a href="">Договор оферты</a>
					<a href="">Условия использования</a>
					<a href="">Финансовые вопросы</a>
					<a href="">Отзывы</a> <!-- можно отправить в информацию -->
					<a href="">Тех. поддержка</a>
					<a href="">Сообщить о нарушении</a>
					<a href="">Предложение по улучшению услуг</a>
				</div>
			</div>
		</footer>
	</div>
<body>

	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Custom_scripts -->
	<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/modules/login/vendor/jquery-2.0.3.min.js"></script>
	<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/modules/login/js/ajax-form.js"></script>
	
	<?php 
		$path = $_SERVER['PHP_SELF'];
		$file = basename($path, ".php");
	?>
		<script>
			var $theme_number = "<?php $_COOKIE['theme']; ?>";
		</script>
	<?php if ( $file == "index" ):?>
		<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/animation/main_page_anim.js"></script>
	<?php endif;?>


	

</body>

</html>