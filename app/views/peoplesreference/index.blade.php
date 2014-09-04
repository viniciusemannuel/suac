@section('content')

<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">


					<ol class="breadcrumb">
						<li><a href="/suac/home.php"><i class="icon-dashboard"></i> Home</a></li>
						<li class="active">  /  <i class="icon-group"></i> Pessoas referênciadas</li>
					</ol>


				</div>
			</div>

			<br>



			<div class="row">
				<div class="span12">
					<div class="widget widget-plain">
						<div class="widget-content">
							<a href="cadastrar.php" class="btn btn-large btn-success btn-support-ask"> Cadastrar pessoa referênciada </a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">

				<div class="span12">

					<div class="widget widget-table action-table">
						<div class="widget-header">
							<i class="icon-group"></i>
							<h3>Pessoas referenciadas cadastradas</h3>
						</div>
						<div class="widget-content">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th> Nome </th>
										<th> Apelido</th>
										<th class="td-actions">Ações</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Raimundo Ananias</td>
										<td>Ananias</td>
										<td class="td-actions">
											<a href="ver.php">
												<button class="btn btn-info">
													Ver
												</button>
											</a>
											<a href="alterar.php">
												<button class="btn btn-warning">
													Alterar
												</button>
											</a>
											<a href="#">
												<button class="btn btn-danger">
													Excluir
												</button>
											</a>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>


@stop