<div class="site-navbar">
	<div class="container py-1">
	  <div class="row align-items-center">
		<div class="col-4 col-md-3">
			<h1 class="mb-0 site-logo text-center">
				<a href="index.php?page=main">
					<img src="images/icons/logo-white.png">
				</a>
			</h1>
		</div>
		<div class="col-8 col-md-9">
		  <nav class="site-navigation text-right" role="navigation">
			<div class="container">
			  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
			  <ul class="site-menu js-clone-nav d-none d-xl-block" style="text-transform: uppercase;">
					<li <?php if (!isset( $_GET['page'] ) or isset( $_GET['page'] ) == 'main') { echo 'class="active"'; } ?>><a href="index.php?page=main">Главная</a></li>
					<li class="has-children <?php if ( isset( $_GET['page'] ) == 'kitchens' or isset( $_GET['page'] ) == 'groups' or isset( $_GET['page'] ) == 'prihojie' or isset( $_GET['page'] ) == 'cupe') echo 'active'; ?>">
						<a>Каталог</a>
						<ul class="dropdown arrow-top">
							<li><a href="index.php?page=kitchens">Кухни</a></li>
							<li><a href="index.php?page=groups">Обеденные группы</a></li>
							<li><a href="index.php?page=prihojie">Прихожие</a></li>
							<li><a href="index.php?page=cupe">Шкафы-купе и гардеробные</a></li>
						</ul>
					</li>
					<li <?php if ( isset( $_GET['page'] ) == 'portfolio') echo 'class="active"'; ?>><a href="index.php?page=portfolio">Наши работы</a></li>
					<li <?php if (isset( $_GET['page']) == 'actions') echo 'class="active"'; ?>><a href="index.php?page=actions">Акции</a></li>
					<li <?php if (isset( $_GET['page']) == 'contacts') echo 'class="active"'; ?>><a href="index.php?page=contacts">Контакты</a></li>
				</ul>
				<ul class="site-menu js-clone-nav d-none d-xl-block text-center" style="text-transform: uppercase;">
					<li><button class="btn btn-primary3" data-toggle="modal" data-target="#exampleModal1">Вызов дизайнера</button></li>
					<li><button class="btn btn-primary3" data-toggle="modal" data-target="#exampleModal2">Замер помещения</button></li>
				</ul>
			</div>
		  </nav>
		</div>
	  </div>
	</div>
</div><!-- site-navbar -->