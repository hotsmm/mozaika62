<?php
	
	/*
		Template Name: Акции
		Template Post Type: page
	*/
	
	include 'header-3.php';
	
?>

	
	<!-- Actions -->
	<div id="actions" class="site-section about-section">
		<div class="container mt-5">
			<div class="row justify-content-center align-items-center">
				<div class="col-md-8">
					<!--span class="sub-title text-center" style="color: #00a3d3;">Наши</span>
					<h3 class="mb-4 text-center" style="color:#e10585;">Акции</h3-->
					<!--p class="mb-5" style="color:#000;"><strong>В настоящий момент у нас действуют следующие акции:</strong></p-->
					<!--img src="images/actions/banner-1.jpg" class="w-100 mb-3 shadow">
					<p class="mb-5 text-center" style="color:#000;">* Количество товаров по акции ограничено!</p-->
					<div class="row justify-content-center mb-5">
						<div class="col text-center">
							<span class="sub-title" style="color: #00a3d3;">Внимание!</span>
							<h3 class="mb-4">Новая акция</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-2023-11-16.jpg" alt="Image" class="img-fluid shadow">
						</div>
					</div>
					<p class="m3-5" style="color:#000;"><strong>Другие акции:</strong></p>
					<ul style="color:#000;">
						<li>При заказе кухни от 150 т.р.– скидка 10%.</li>
						<li>При заказе корпусной мебели от 60 т.р. – скидка 5%.</li>
					</ul>
					<p id="blink">Позвони и получи скидку!</p>
					<p class="mb-5" style="color:#000;">Подробности акций уточняйте по телефону или у продавцов-консультантов.</p>
					<!-- <p><a href="#" class="btn btn-primary btn-lg rounded-0">Read More About Us</a></p> -->
				</div>
			</div>
		</div>
    </div><!-- /Actions -->


</div><!-- .site-wrap -->


<?php include 'footer.php'; ?>