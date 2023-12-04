		<footer class="site-footer pt-3 pb-3">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<p style="margin: 0; color: rgba(255,255,255,.75);">Студия кухни "Мозаика" &#169; 2023г.</p>
						<p style="font-size: .75rem; margin: 0; color: rgba(255,255,255,.75);">Создание и продвижение сайтов - <a href="https://сайт100.рф" style=" color: rgba(255,255,255,.9);">сайт100.рф</a></p>
					</div>
				</div>
			</div>
		</footer>

		<!-- Показываем сообщение об успешной отправки -->
		<div style="display: <?php echo $_SESSION['display'] ?>;" onclick="modalClose();">
			<div id="background-msg" style="display: <?php echo $_SESSION['display'] ?>;"></div>
			<button id="btn-close" type="button" class="btn-close btn-close-white" onclick="modalClose();" style="position: absolute; z-index: 9999; top: 15px; right: 15px;"></button>
			<div id="message">
				<?php echo $_SESSION['recaptcha']; unset( $_SESSION['recaptcha'] ); ?>
			</div> 
		</div>

		<!-- Modal 1 -->
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel1" style="font-weight: 400;">Консультация дизайнера:</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p><small>Наш дизайнер ответит на Ваши вопросы, ознакомит с продукцией и материалами, cделает 3D дизайн-проект абсолютно бесплатно! Для консультации с дизайнером введите Ваше имя и телефон.</small></p>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_design.php" style="text-align: center;">
							<div class="row">
								<div class="col-6">
									<input type="text" class="form-control" name="name" placeholder="Введите Ваше имя" style="margin: auto; margin-bottom: 15px; max-width: 400px;">
								</div>
								<div class="col-6">
									<input type="text" class="form-control" name="tel" placeholder="Введите Ваш телефон" style="margin: auto; margin-bottom: 15px; max-width: 400px;" required>
								</div>
							</div>
							<!-- reCaptcha v3 -->
							<input type="hidden" id="g-recaptcha-response-order-designer" name="g-recaptcha-response">
							<button type="submit" class="btn btn-lg btn-primary2 mt-3 mb-3">Оставить заявку</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal 2 -->
		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel2" style="font-weight: 400;">Замер помещения</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p><small>Наш специалист приедет в удобное для Вас время, произведет замеры, ознакомит с продукцией и материалами, подготовит 3D дизайн-проект, проконсультирует по всем вопросам! Для связи с замерщиком введите Ваше имя и телефон.</small></p>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_measurer.php" style="text-align: center;">
							<div class="row">
								<div class="col-6">
									<input type="text" class="form-control" name="name" placeholder="Введите Ваше имя" style="margin: auto; margin-bottom: 15px; max-width: 400px;">
								</div>
								<div class="col-6">
									<input type="text" class="form-control" name="tel" placeholder="Введите Ваш телефон" style="margin: auto; margin-bottom: 15px; max-width: 400px;" required>
								</div>
							</div>
							<!-- reCaptcha v3 -->
							<input type="hidden" id="g-recaptcha-response-calculate-area" name="g-recaptcha-response">
							<button type="submit" class="btn btn-lg btn-primary2 mt-3 mb-3">Оставить заявку</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Get Price -->
		<div class="modal fade" id="getPriceModal" tabindex="-1" role="dialog" aria-labelledby="getPriceLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="getPriceLabel" style="font-weight: 400;">Рассчитать стоимость</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p><small>Оставьте Ваши контакты, наш специалист свяжется с Вами в ближайшее время и рассчитает стоимость интересующего Вас предмета мебели.</small></p>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get-price-mail.php" style="text-align: center;">
							<!--input id="productName" type="text" class="form-control" name="productName" style="margin: auto; margin-bottom: 15px; max-width: 400px;"-->
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control" name="name" placeholder="Введите Ваше имя" style="margin: auto; margin-bottom: 15px; max-width: 400px;">
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" name="tel" placeholder="Введите Ваш телефон" style="margin: auto; margin-bottom: 15px; max-width: 400px;" required>
								</div>
							</div>
							<!-- reCaptcha v3 -->
							<input type="hidden" id="g-recaptcha-response-get-price" name="g-recaptcha-response">
							<button type="submit" class="btn btn-lg btn-primary2 mt-3 mb-3">Оставить заявку</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Get Price -->

		<!-- Order specialist -->
		<div id="right-contacts">
			<div id="ico-right-contacts">
				<img src="<?php echo get_template_directory_uri(); ?>/images/icons/telephone.png" class="blink-image" style="margin: 15px;">
			</div>
			<div id="content-right-contacts">
				<p style="margin-top: 15px;">Консультация специалиста по телефону: <a href="tel:89511014610" style="color: white; font-weight: 500;">8 (951) 101-46-10</a></p>
			</div>
			<div style="clear: both;"></div>
		</div>
		<!-- /Order specialist -->

		<!-- Messengers 2 -->
		<div class="messengers-2">
			<div id="messengers-2-button" onclick="clickMessengers2Button();">
			
			</div>
			<div id="messenger-1">
				<a href="whatsapp://send?phone=+79511014610"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/whatsapp.png"></a>
			</div>
			<!--div id="messenger-2" class="rounded-circle">
				<a href="tg://resolve?domain=vasilyevr"><img src="images/icons/telegram.png"></a>
			</div-->
		</div>
		<!-- /Messengers 2 -->

		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countdown.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
		<!-- Wow animated -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
		<!-- Scripts for Quiz and for add loader -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>
		<!-- scripts.js -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		<!-- quiz.js -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/quiz.js"></script>
		<!-- reCaptcha v3 from Google -->
		<script src='https://www.google.com/recaptcha/api.js?render=6LcfEa8ZAAAAAE9DeQF6Lfx5B5jbYft-StJyfAdf'></script>
		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/064ae6a0a2.js"></script>
		<script>
			grecaptcha.ready(function() {
				grecaptcha.execute('6LcfEa8ZAAAAAE9DeQF6Lfx5B5jbYft-StJyfAdf', {action: 'action_name'}).then(function(token) {
					document.getElementById('g-recaptcha-response-get-price').value=token;
					document.getElementById('g-recaptcha-response-callback').value=token;
					document.getElementById('g-recaptcha-response-order-designer').value=token;
					document.getElementById('g-recaptcha-response-calculate-area').value=token;
					//document.getElementById('g-recaptcha-response-quiz').value=token;
				});
			});
		</script>
		<script>
			function getPrice(prodName) {
				let productName = prodName;
				document.getElementById('productName').value = productName;
			}
		</script>
	</body>
</html>