			<footer>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="footer contacts">
							<h3>Информация</h3>
							<a href="https://vk.com/40digit">Мы во вконтакте: <i class="fab fa-vk"></i></a>
							<a href="">О компании</a>
							<a href="">Контакты</a>
							<a href="">Карьера в 40digit</a>
							<a href="">Акции и скидки</a>
							<a href="">Мерч</a>
						</div>
					</div>					
					<div class="col-sm-6 col-md-3">
						<div class="footer to_partners">
						<h3>Партнёрам</h3>
							<a href="">Условия и цены</a>
							<a href="">Для профессионалов</a>
							<a href="">Реферальная программа</a>
							<a href="">Для интеграторов</a>
							<a href="">Кооперация</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="footer services">
						<h3>Услуги</h3>
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
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="footer docs">
							<h3>Помощь</h3>
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
				</div>
			</footer>
		</div>
	</div>
<body>

	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Bootstrap tooltips -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<!-- Bootstrap core JavaScript -->
	<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/assets/js/bootstrap.min.js"></script>
	
	<!-- Custom_scripts -->
	<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/modules/login/vendor/jquery-2.0.3.min.js"></script>
	<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/modules/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/modules/login/js/ajax-form.js"></script>
	
	<?php 
		$path = $_SERVER['PHP_SELF'];
		$file = basename($path, ".php");
	?>
	<?php if ( $file == "index" ):?>
		<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/animation/main_page_anim.js"></script>
	<?php endif;?>
	

</body>

</html>