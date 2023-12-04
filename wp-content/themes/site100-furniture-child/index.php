<?php
	
	/*
		Template Name: Главная
		Template Post Type: page
	*/
	
	include 'header-2.php';
	
?>
	
	
<!-- Action -->
<div class="site-section about-section bg-white">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<span class="sub-title" style="color: #00a3d3;">Внимание!</span>
				<h3 class="mb-4">Новая акция</h3>
				<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-2023-11-16.jpg" alt="Image" class="img-fluid">
			</div>
		</div>
	</div>
</div>
<!-- /Action -->


<!-- Action --
<div class="site-section about-section">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-8 text-center">
				<span class="sub-title" style="color: #00a3d3;">Внимание</span>
				<h3 class="mb-4">Акция!</h3>
				<img src="images/actions/banner-1.jpg" class="w-100 mb-3 shadow">
				<p class="text-center" style="color:#000;">* Количество товаров по акции ограничено!</p>
			</div>
		</div>
	</div>
</div>
<!-- /Action -->
	
	
<!-- Section Quiz -->
<div id="quiz-sp" class="scroll-points"></div>
<section id="quiz" class="quiz-section bg-light py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="text-center mb-5">
					<span class="sub-title" style="color: #00a3d3;">Ответьте на несколько вопросов ниже и мы</span>
					Рассчитаем стоимость Вашей мебели
				</h2>
				
				<div class="row justify-content-center">
			
					<!--  ПЕРВЫЙ ОБЩИЙ ВОПРОС -->
					<div class="col-12" id="1">
						<h3 class="text-center mb-5"><!--span class="me-2" style="color: #A5A5A5;">1/7</span-->Какая мебель Вас интересует?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-1">
									<input type="radio" id="answer-1-1" name="quostion-1" class="checkbox" value="Кухня">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Кухня</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-2">
									<input type="radio" id="answer-1-2" name="quostion-1" class="checkbox" value="Шкаф или гардеробная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Шкаф или гардеробная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-3">
									<input type="radio" id="answer-1-3" name="quostion-1" class="checkbox" value="Другая корпусная мебель">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Другая корпусная мебель</h3>
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" style="width: 175px;" onclick="nextQuostion( '1' );">
							</div>
						</div>
					</div>
					<!--  /ПЕРВЫЙ ОБЩИЙ ВОПРОС -->
					
					
					<!-- ВОПРОСЫ ПО КУХНЯМ -->
					<div class="col-12" id="2-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/7</span>Какая планировка кухни Вам нужна?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-1">
									<input type="radio" id="answer-2-1-1" name="quostion-2-1" class="checkbox" value="Прямая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Прямая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-2">
									<input type="radio" id="answer-2-1-2" name="quostion-2-1" class="checkbox" value="Угловая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-3">
									<input type="radio" id="answer-2-1-3" name="quostion-2-1" class="checkbox" value="П-образная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">П-образная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-4">
									<input type="radio" id="answer-2-1-4" name="quostion-2-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">С островком</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-2-1-5">
									<input type="radio" id="answer-2-1-5" name="quostion-2-1" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3>Пока не знаю</h3>
							</div-->
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '2-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '2-1' );">
							</div>
						</div>
					</div>
					
					<!-- Один размер -->
					<div class="col-md-6" id="3-1-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-1" name="quostion-3-1-1">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-1' );">
							</div>
						</div>
					</div>
					
					<!-- Два размера -->
					<div class="col-md-6" id="3-1-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-2" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
								<input type="text" class="form-control" id="answer-3-1-2-2" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-2' );">
							</div>
						</div>
					</div>
					
					<!-- Три размера -->
					<div class="col-md-6" id="3-1-3" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
								<input type="text" class="form-control" id="answer-3-1-2-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-3" class="form-label">Длинна 3, м</label>
								<input type="text" class="form-control" id="answer-3-1-3-3" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-3' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-3' );">
							</div>
						</div>
					</div>
					
					<!-- Четыре размера -->
					<div class="col-md-6" id="3-1-4" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Укажите размеры в метрах</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-3">
								<label for="answer-3-1-1" class="form-label">Длинна 1</label>
								<input type="text" class="form-control" id="answer-3-1-1-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-2" class="form-label">Длинна 2</label>
								<input type="text" class="form-control" id="answer-3-1-2-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-3" class="form-label">Длинна 3</label>
								<input type="text" class="form-control" id="answer-3-1-3-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-4" class="form-label">Длинна островка</label>
								<input type="text" class="form-control" id="answer-3-1-4-4" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-4' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-4' );">
							</div>
						</div>
					</div>
					
					<!-- 4/7 -->
					<div class="col-12" id="4-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/7</span>Какой стиль кухни Вы рассматриваете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-1">
									<input type="radio" id="answer-4-1-1" name="quostion-4-1" class="checkbox" value="Современный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Современный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-2">
									<input type="radio" id="answer-4-1-2" name="quostion-4-1" class="checkbox" value="Классический">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Классический</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-3">
									<input type="radio" id="answer-4-1-3" name="quostion-4-1" class="checkbox" value="Лофт">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Лофт</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-4">
									<input type="radio" id="answer-4-1-4" name="quostion-4-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '4-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '4-1' );">
							</div>
						</div>
					</div>
					
					<!-- 5/7 -->
					<div class="col-12" id="5-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/7</span>Какой материал фасада кухни Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-1">
									<input type="radio" id="answer-5-1-1" name="quostion-5-1" class="checkbox" value="ЛДСП/ЛМДФ">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП/ЛМДФ</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-2">
									<input type="radio" id="answer-5-1-2" name="quostion-5-1" class="checkbox" value="Пленка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пленка</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-3">
									<input type="radio" id="answer-5-1-3" name="quostion-5-1" class="checkbox" value="Эмаль">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Эмаль</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-4">
									<input type="radio" id="answer-5-1-4" name="quostion-5-1" class="checkbox" value="Пластик">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пластик</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-5">
									<input type="radio" id="answer-5-1-5" name="quostion-5-1" class="checkbox" value="Массив">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Массив</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-6">
									<input type="radio" id="answer-5-1-6" name="quostion-5-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '5-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '5-1' );">
							</div>
						</div>
					</div>
					
					<!-- 6/7 -->
					<div class="col-12" id="6-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/7</span>Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-1">
									<input type="radio" id="answer-6-1-1" name="quostion-6-1" class="checkbox" value="Скидка 10%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-2">
									<input type="radio" id="answer-6-1-2" name="quostion-6-1" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-3">
									<input type="radio" id="answer-6-1-3" name="quostion-6-1" class="checkbox" value="Скидка 15% на заказ шкафа в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15% на заказ шкафа в теченее года</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-6-1-4">
									<input type="radio" id="answer-6-1-4" name="quostion-6-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3>Пластик</h3>
							</div-->
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-outline-color-1" onclick="previousQuostion( '6-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '6-1' );">
							</div>
						</div>
					</div>
					
					<!-- 7/1 -->
					<div class="col-md-6" id="7-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">7/7</span>Введите Ваши контакты</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate_kitchen.php">
							<div class="row justify-content-center">
								<div class="col-md-4">
									<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="name">
								</div>
								<div class="col-md-4">
									<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
									<input type="text" class="form-control telMask" id="exampleFormControlInput2" name="phone">
								</div>
							</div>
							<div class="row">
								<div class="col text-center" style="margin-top: 45px;">
									<input type="hidden" id="answer1-1" name="answer1">
									<input type="hidden" id="answer2-1" name="answer2">
									<input type="hidden" id="answer3-1-1" name="answer3-1">
									<input type="hidden" id="answer3-1-2" name="answer3-2">
									<input type="hidden" id="answer3-1-3" name="answer3-3">
									<input type="hidden" id="answer3-1-4" name="answer3-4">
									<input type="hidden" id="answer4-1" name="answer4">
									<input type="hidden" id="answer5-1" name="answer5">
									<input type="hidden" id="answer6-1" name="answer6">
									<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '7-1' );">
									<input type="submit" class="btn btn-corporate-color-1" value="Отправить">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО КУХНЯМ -->
					
					
					<!-- ВОПРОСЫ ПО ШКАФАМ -->
					<div class="col-12" id="2-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/7</span>Какой тип шкафа Вам нужен?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-1">
									<input type="radio" id="answer-2-2-1" name="quostion-2-2" class="checkbox" value="Корпусный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Корпусный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-2">
									<input type="radio" id="answer-2-2-2" name="quostion-2-2" class="checkbox" value="Встроенный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Встроенный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-3">
									<input type="radio" id="answer-2-2-3" name="quostion-2-2" class="checkbox" value="Угловой">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловой</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-4">
									<input type="radio" id="answer-2-2-4" name="quostion-2-2" class="checkbox" value="Радиусный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Радиусный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-5">
									<input type="radio" id="answer-2-2-5" name="quostion-2-2" class="checkbox" value="Гардеробный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Гардеробный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-6">
									<input type="radio" id="answer-2-2-6" name="quostion-2-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '2-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '2-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="3-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span>Какой материал фасада шкафа Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-1">
									<input type="radio" id="answer-3-2-1" name="quostion-3-2" class="checkbox" value="ЛДСП">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-2">
									<input type="radio" id="answer-3-2-2" name="quostion-3-2" class="checkbox" value="Пескоструй">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пескоструй</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-3">
									<input type="radio" id="answer-3-2-3" name="quostion-3-2" class="checkbox" value="Зеркало">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Зеркало</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-4">
									<input type="radio" id="answer-3-2-4" name="quostion-3-2" class="checkbox" value="Фотопечать">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Фотопечать</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-5">
									<input type="radio" id="answer-3-2-5" name="quostion-3-2" class="checkbox" value="Комбинированный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Комбинированный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-6">
									<input type="radio" id="answer-3-2-6" name="quostion-3-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="4-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/7</span>Какая ориентировочная ширина шкафа планируется?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-1">
									<input type="radio" id="answer-4-2-1" name="quostion-4-2" class="checkbox" value="1">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-2">
									<input type="radio" id="answer-4-2-2" name="quostion-4-2" class="checkbox" value="1,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-3">
									<input type="radio" id="answer-4-2-3" name="quostion-4-2" class="checkbox" value="2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-4">
									<input type="radio" id="answer-4-2-4" name="quostion-4-2" class="checkbox" value="2,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-5">
									<input type="radio" id="answer-4-2-5" name="quostion-4-2" class="checkbox" value="3">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-6">
									<input type="radio" id="answer-4-2-6" name="quostion-4-2" class="checkbox" value="3,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-7">
									<input type="radio" id="answer-4-2-7" name="quostion-4-2" class="checkbox" value="4">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-8">
									<input type="radio" id="answer-4-2-8" name="quostion-4-2" class="checkbox" value="4,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-9">
									<input type="radio" id="answer-4-2-9" name="quostion-4-2" class="checkbox" value="5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-10">
									<input type="radio" id="answer-4-2-10" name="quostion-4-2" class="checkbox" value=">5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/checkbox.svg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">>5</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '4-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '4-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="5-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/7</span>Какое количество дверей Вы предполагаете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-1">
									<input type="radio" id="answer-5-2-1" name="quostion-5-2" class="checkbox" value="1 дверь">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1 дверь</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-2">
									<input type="radio" id="answer-5-2-2" name="quostion-5-2" class="checkbox" value="2 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-3">
									<input type="radio" id="answer-5-2-3" name="quostion-5-2" class="checkbox" value="3 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-4">
									<input type="radio" id="answer-5-2-4" name="quostion-5-2" class="checkbox" value="4 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-5">
									<input type="radio" id="answer-5-2-5" name="quostion-5-2" class="checkbox" value="5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5 дверей</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-6">
									<input type="radio" id="answer-5-2-6" name="quostion-5-2" class="checkbox" value="Более 5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Более 5 дверей</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '5-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '5-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="6-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/7</span>Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-1">
									<input type="radio" id="answer-6-2-1" name="quostion-6-2" class="checkbox" value="Скидка 15%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-2">
									<input type="radio" id="answer-6-2-2" name="quostion-6-2" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-3">
									<input type="radio" id="answer-6-2-3" name="quostion-6-2" class="checkbox" value="Бесплатная доставка и установка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Бесплатная доставка и установка</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-4">
									<input type="radio" id="answer-6-2-4" name="quostion-6-2" class="checkbox" value="Скидка 10% на заказ кухни в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10% на заказ кухни в теченее года</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '6-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '6-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-md-6" id="7-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">7/7</span>Введите Ваши контакты</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate_closet.php">
							<div class="row justify-content-center">
								<div class="col-md-4">
									<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="name">
								</div>
								<div class="col-md-4">
									<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
									<input type="text" class="form-control telMask" id="exampleFormControlInput2" name="phone" required>
								</div>
							</div>
							<div class="row">
								<div class="col text-center" style="margin-top: 45px;">
									<input type="hidden" id="answer1-2" name="answer1">
									<input type="hidden" id="answer2-2" name="answer2">
									<input type="hidden" id="answer3-2" name="answer3">
									<input type="hidden" id="answer4-2" name="answer4">
									<input type="hidden" id="answer5-2" name="answer5">
									<input type="hidden" id="answer6-2" name="answer6">
									<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '7-2' );">
									<input type="submit" class="btn btn-corporate-color-1" value="Отправить">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО ШКАФАМ -->
					
					
					<!-- ВЛПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->
					<div class="col-12" id="2-3" style="display: none;">
						<h3 class="text-center mb-5">Для расчета стоимости опишите Ваше изделие</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate.php" enctype="multipart/form-data">
							<div class="row justify-content-center py-2">
								<div class="col-8 mb-3">
									<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1" placeholder="Опишите изделие своими словами, укажите размеры, материалы и другую информацию"></textarea>
								</div>
								<div class="col-8">
									<p>Прикрепите изображение изделия или схематично нарисованный Вами рисунок.</p>
								</div>
								<div class="col-8 mb-3">
									<div class="input-group custom-file-button">
										<label class="input-group-text" for="inputGroupFile">Прикрепить</label>
										<input type="file" name="mail_file" accept=".jpg,.jpeg,.png,.pdf,.heic" class="form-control" id="inputGroupFile">
									</div>
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-4 mb-3">
									<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
								</div>
								<div class="col-4 mb-3">
									<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required="" inputmode="text">
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col text-center" style="margin-top: 35px;">
									<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '2-3' );">
									<input type="submit" value="Отправить" class="btn btn-corporate-color-1">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->							
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End section Quiz -->


<!-- About us -->
<div class="site-section about-section bg-white">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 mb-5 mb-lg-0"> <!--img-years -->
				<!--span class="experience">
					<span class="years" style="color: #d0326f; text-shadow: 0 0 5px white">Нам 20 лет</span>
					<!--<span class="caption" style="color: #00a3d3;">накопленного опыта</span>-->
				<!--/span-->
				<img src="<?php echo get_template_directory_uri(); ?>/images/o-nas.jpg" alt="Image" class="img-fluid">
			
			</div>
			<div class="col-lg-6 ml-auto">
				<span class="sub-title" style="color: #00a3d3;">Коротко</span>
				<h3 class="mb-4">О нас</h3>
				<p class="mb-5">Студия кухни «Мозаика» поможет каждому клиенту при выборе мебели по индивидуальным размерам, бесплатный дизайн-проект любой сложности, большой выбор мебели по цветовой гамме и ценовой категории.</p>
				<p class="mb-5">Обширный ассортимент фасадного материала такие как: Fundermax, Альтернатив, AGT, Feelwood, TSS. Для каждого клиента подбираем по его желаниям и возможностям европейскую фурнитуру, таких фирм как: Blum, Boyard, Hettich, VIBO и др. А также у нас можно укомплектоать мебель кухонной техникой известных фирм: Эликор, Midea, Куперсберг и др.</p>
				<p class="mb-5">Нашими партнерами являются крупные фабрики «Ульяновск», «CUCINA», г. Пенза «Лев Мебель», «Мебель стиль».</p>
				<!-- <p><a href="#" class="btn btn-primary btn-lg rounded-0">Read More About Us</a></p> -->
			</div>
		</div>
	</div>
</div>
<!-- /About us -->
	
	
<!-- Quiz modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title" id="exampleModalLabel">Выберите Вашу планировку</h5> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- Quiz container -->
			<div id="quiz-container" class="container shadow bg-white pt-4 rounded-lg">
				<div class="row">
					<div class="col pb-4 text-center">
						<h3>Выберите Вашу планировку</h3>
					</div>
				</div>
				<div class="row justify-content-center text-left" style="min-height: 275px;">
					<div class="col-md-3 pb-5">
						<div class="card w-100 border-0">
							<img src="<?php echo get_template_directory_uri(); ?>/images/quiz/q-1-1.jpg" class="card-img-top" alt="...">
							<div class="card-body pl-1 pr-1" style="min-height: auto;">
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
									<label class="custom-control-label" for="customRadioInline1"><h5 class="card-title mb-0">Линейная</h5></label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 pb-5">
						<div class="card w-100 border-0">
							<img src="<?php echo get_template_directory_uri(); ?>/images/quiz/q-1-2.jpg" class="card-img-top" alt="...">
							<div class="card-body pl-1 pr-1" style="min-height: auto;">
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
									<label class="custom-control-label" for="customRadioInline2"><h5 class="card-title mb-0">Г-образная</h5></label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 pb-5">
						<div class="card w-100 border-0">
							<img src="<?php echo get_template_directory_uri(); ?>/images/quiz/q-1-3.jpg" class="card-img-top" alt="...">
							<div class="card-body pl-1 pr-1" style="min-height: auto;">
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
									<label class="custom-control-label" for="customRadioInline3"><h5 class="card-title mb-0">П-образная</h5></label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row pb-5">
					<div class="col text-center">
						<button class="btn btn-lg btn-primary2" onclick="question1();">Следующий вопрос</button>
					</div>
				</div>
			</div>
			<!-- End quiz container -->
		</div>
	</div>
</div>
	
	
<!-- Scripts for quiz -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	function question1() {
		
		var question = 'question1';
		
		if (document.getElementById('customRadioInline1').checked == true) {
			var answer = 'Линейная';
		} else if (document.getElementById('customRadioInline2').checked == true) {
			var answer = 'Г-образная';
		} else if (document.getElementById('customRadioInline3').checked == true) {
			var answer = 'П-образная';
		} else {
			var answer = 'Линейная';
		}
		
		$.ajax ({
			type: "POST",
			url: "<?php echo get_template_directory_uri(); ?>/quiz-action.php",
			data: {question, answer},
			dataType: "html",
			success: function(data) {
				var p = document.getElementById('quiz-container');
				p.innerHTML = data;
			}
		});
	}
	
	function question2() {
		var question = 'question2';
		var answer1 = document.getElementById('d1').value;
		var answer2 = document.getElementById('d2').value;
		var answer3 = document.getElementById('d3').value;
		
		$.ajax ({
			type: "POST",
			url: "<?php echo get_template_directory_uri(); ?>/quiz-action.php",
			data: { question, answer1, answer2, answer3 },
			dataType: "html",
			success: function(data) {
				var p = document.getElementById('quiz-container');
				p.innerHTML = data;
			}
		});
	}
	
	function question3() {
		
		var question = 'question3';
		
		if (document.getElementById('customRadioInline1').checked == true) {
			var answer = 'ДСП';
		} else if (document.getElementById('customRadioInline2').checked == true) {
			var answer = 'Пленка';
		} else if (document.getElementById('customRadioInline3').checked == true) {
			var answer = 'Пластик';
		} else if (document.getElementById('customRadioInline4').checked == true) {
			var answer = 'Массив';
		}
		
		$.ajax ({
			type: "POST",
			url: "<?php echo get_template_directory_uri(); ?>/quiz-action.php",
			data: {question, answer},
			dataType: "html",
			success: function(data) {
				var p = document.getElementById('quiz-container');
				p.innerHTML = data;
			}
		});
	}
</script>


</div><!-- .site-wrap -->


<?php include 'footer.php'; ?>