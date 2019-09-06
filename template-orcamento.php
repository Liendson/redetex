<!-- Template Name: Orçamento -->

<?php get_header(); ?>

	<div class="container" role="main">
		<div class="row">
			<span style="float: right;"><?php echo do_shortcode('[flexy_breadcrumb] ') ?></span>
			<div class="row conteudo col-md-offset-2 col-sm-8">
				<?php the_post(); ?>
				<h3><?php echo get_the_title( $post->post_parent ) ?></h3>
				<p>Preencha o Formulário e responderemos sua solicitação o mais rápido possível!</p>
			</div>
			<article class="row conteudo col-sm-12">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<label for="nome" class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">Nome:</label>
									</div>
									<div class="form-group">
										<div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">
											<input type="text" name="conteudo" class="form-control" maxlength="255">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<label for="nome" class="col-md-offset-3 col-md-3 col-sm-8">Endereço:</label>
										<label for="nome" class="col-md-4 col-sm-8">Telefone:</label>
									</div>
									<div class="form-group">
										<div class="col-md-offset-3 col-sm-offset-2 col-md-3 col-sm-8">
											<input type="text" name="conteudo" class="form-control" maxlength="255">
										</div>
										<div class="col-md-3 col-sm-8">
											<input type="text" name="conteudo" class="form-control" maxlength="255">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<label for="nome" class="col-md-offset-6 col-md-6">Produto*:</label>
									</div>
									<div class="form-group">
										<div class="col-md-offset-6 col-md-6">
											<select class="form-control">
												<option value="rede de protecao">Rede de Proteção</option>
												<option value="rede de protecao">Rede de Proteção</option>
												<option value="rede de protecao">Rede de Proteção</option>
												<option value="rede de protecao">Rede de Proteção</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<label for="nome" class="col-md-3">Largura*</label>
										<label for="nome" class="col-md-3">Altura*:</label>
									</div>
									<div class="form-group">
										<div class="col-md-3">
											<input type="number" name="largura" class="form-control"> 
										</div>
										<div class="col-md-3">
											<input type="number" name="altura" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<label for="nome" class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">Observação Adicional:</label>
									</div>
									<div class="form-group">
										<div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">
											<textarea type="text" name="conteudo" class="form-control" maxlength="255"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<label for="nome" class="col-md-offset-6 col-md-2" data-toggle="popover">Arquivo:</label>
									</div>
									<div class="form-group">
										<div class="col-md-offset-6 col-md-6">
											<input id="imagem" type="file" name="imagem" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<label for="nome" class="col-md-6">&nbsp;</label>
									</div>
									<div class="col-md-6 form-group">
										<div class="form-group">
											<div class="col-md-12">
												<button type="submit" class="btn btn-primary btn-block">
													<span class="glyphicon glyphicon-share" aria-hidden="true"></span> Enviar
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</article>
		</div>
	</div>

<?php get_footer(); ?>
