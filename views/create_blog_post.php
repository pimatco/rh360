<form class="form-horizontal" action="<?= BASE_URL; ?>/blogpost/blogpost/adicionar_blog_post" method="post">
	<div class="form-group">
		<label class="col-lg-2 control-label">Título</label>
		<div class="col-lg-10">
			<input type="text" name="titulo" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label">Subtítulo</label>
		<div class="col-lg-10">
			<input type="text" name="subtitulo" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-2 control-label">Conteúdo</label>
		<div class="col-lg-10">
			<textarea name="conteudo" class="form-control"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="form-check">
			<label class="form-check-label col-lg-2 control-label pull-right">
				<input class="form-check-input" type="checkbox" name="status" value="1">
				Ativo
			</label>
		</div>
	</div>
	<div class="form-group" id="envia">	
		<input class="btn btn-success" type="submit"/>
	</div>
</form>