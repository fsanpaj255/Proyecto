<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="section-products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Concursos activos</h3>
										<h2>Los concursos actuales...</h2>
								</div>
						</div>
				</div>
			<?php	if (!isset($_SESSION['rol'])){ ?>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="?menu=autentifica"><i class="fas fa-shopping-cart"></i>¡Participar!</a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Concurso prueba de sonido</h3>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="?menu=autentifica"><i class="fas fa-shopping-cart"></i>¡Participar!</a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Concurso ondas de sonido</h3>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="?menu=autentifica"><i class="fas fa-shopping-cart"></i>¡Participar!</a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="product-title">Concurso mejor canción</h3>
										</div>
								</div>
								</div>
						</div>
						<?php     
						 }else{
							if ($_SESSION['rol'] == 1){ 
							$c = new Conexion;
							$conex = $c->conectabd();
							$rpconcursos = new repositorioConcurso($conex);
							$concursos = $rpconcursos->getallConcursos();
							foreach($concursos as $concurso){ ?>

								<div class="row">
									<!-- Single Product -->
									<div class="col-md-6 col-lg-4 col-xl-3">
											<div id="product-1" class="single-product">
													<div class="part-1">
															<ul>
																	<li><a href="?menu=editarconcurso&id=<?php echo $concurso->getId(); ?>"><i class="fas fa-shopping-cart"></i>¡Editar!</a></li>
															</ul>
													</div>
													<div class="part-2">
															<h3 class="h3enunciado">Concurso <?php echo $concurso->getNombre(); ?></h3>
															<h3 class="textofecha">Fecha de inicio: <?php echo $concurso->getFIni(); ?></h3></br> <h3 class="textofecha">Fecha de finalización: <?php echo $concurso->getFFin(); ?></h3>
													</div>
											</div>
									</div>
								</div>
						<?php 
							}
   
						}else{ 
							$c = new Conexion;
							$conex = $c->conectabd();
							$rpconcursos = new repositorioConcurso($conex);
							$concursos = $rpconcursos->getallConcursos();
							foreach($concursos as $concurso){ ?>

<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
												<ul>
														<li><a href="?menu=inscripcion&=<?php $concurso->getId(); ?>"><i class="fas fa-shopping-cart"></i>¡Participar!</a></li>
												</ul>
										</div>
										<div class="part-2">
												<h3 class="h3enunciado">Concurso <?php echo $concurso->getNombre(); ?></h3>
												<h3 class="textofecha">Fecha de inicio: <?php echo $concurso->getFIni(); ?></h3></br><h3 class="textofecha">Fecha de finalización: <?php echo $concurso->getFFin(); ?></h3>
										</div>
								</div>
						</div>
						<?php } 
						}
					}
				?>

				</div>
		</div>
</section>
</body>
</html>