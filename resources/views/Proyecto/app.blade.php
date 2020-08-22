@include('Proyecto.meta')

		@include('Proyecto.css')
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				@include('Proyecto.header')

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>NotiFubol</h2>
							<p>El futbol es como la vida.<br />
							Hay que saber levantarse luego de una derrota.</p>
						</header>
						<span class="image"><img src="images/oe.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

				<!-- CARS-->
				@include('Proyecto.cars')
				<!-- /CARS -->
				

						<footer class="major">
							<ul class="actions special">
								<li><a href="" class="button">Bienvenido</a></li>
							</ul>
						</footer>
					</div>
				</section>


			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Para una mejor experiencia visitanos </h2>
							<p>El talento depende de la inspiracion</p>
						</header>
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Tu correo electronico" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Empezar" class="fit primary" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->

			@include('Proyecto.footer')

		</div>

		<!-- Scripts -->
		@include('Proyecto.script')
	</body>
</html>