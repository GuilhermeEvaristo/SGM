@extends('layouts.app')

@section('content')
	<div class="jumbotron" style="padding: 20px;">
		<div class="container text-center">
			<h2>Sistema de Gerenciamento de Monitorias</h2>
			<h5>Feito por alunos para auxiliar alunos!</h5>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 border rounded">
				<br>
				<h3 class="ml-3">Explore nossas perguntas
					<form action="" class="float-right form-inline mr-3">
						<label class="h5 mr-2">Filtrar postagens: </label>
						<input type="text" class="form-control d-inline mr-2" placeholder="Palavra, tag ou curso...">
						<button type="submit" class="btn btn-success">Buscar</button>
					</form>
				</h3>
				<hr>
				<div id="posts">
					<div id="post-info" class="border-bottom">
						<a href="#" class="text-dark">
							<h4 class="d-inline">Título da postagem</h4>
						</a>
							<span class="text-secondary ml-2">Postado em 00/00/0000</span>
							<span id="curso" class="badge badge-secondary float-right">LOG</span>
							<span id="estado" class="badge badge-info float-right mr-2">Aberto</span>
							<h6>
								<a href="#" class="badge badge-secondary">tag</a>
								<a href="#" class="badge badge-secondary">tag</a>
								<a href="#" class="badge badge-secondary">tag</a>
							</h6>
					</div>
					<div id="post-info" class="border-bottom">
						<a href="#" class="text-dark">
							<h4 class="d-inline">Título da postagem</h4>
						</a>
							<span class="text-secondary ml-2">Postado em 00/00/0000</span>
							<span id="curso" class="badge badge-secondary float-right">IPI</span>
							<span id="estado" class="badge badge-success float-right mr-2">Resolvido</span>
							<h6>
								<a href="#" class="badge badge-secondary">tag</a>
								<a href="#" class="badge badge-secondary">tag</a>
								<a href="#" class="badge badge-secondary">tag</a>
							</h6>
					</div>
					<div id="post-info" class="border-bottom">
						<a href="#" class="text-dark">
							<h4 class="d-inline">Título da postagem</h4>
						</a>
							<span class="text-secondary ml-2">Postado em 00/00/0000</span>
							<span id="curso" class="badge badge-secondary float-right">LOG</span>
							<span id="estado" class="badge badge-info float-right mr-2">Aberto</span>
							<h6>
								<a href="#" class="badge badge-secondary">tag</a>
								<a href="#" class="badge badge-secondary">tag</a>
								<a href="#" class="badge badge-secondary">tag</a>
							</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>