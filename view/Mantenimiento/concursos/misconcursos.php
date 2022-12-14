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

<?php
//capturo la id participante para mi metodo del repo de mostrar participaciones segun el id del participante y entonces con la id de concursos mostrarlos
$idparticipante = $_SESSION['usuario'];
$c = new Conexion;
							$conex = $c->conectabd();
							$rpParticipaciones = new repositorioParticipacion($conex);
							$participaciones = $rpParticipaciones->getparticipaciones($idparticipante);
							foreach($participaciones as $participacion){ 
                                $idconcurso = $participacion->getConcursoId();
                                $rpConcursos = new repositorioConcurso($conex);
                                $concurso-> $rpConcursos->getConcurso($idconcurso);
                                ?>
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
?>