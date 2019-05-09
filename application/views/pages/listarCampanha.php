<main class="container my-3 py-3 shadow">
	<h3>Listar Campanhas</h3>
	<div class="table-responsive text-center">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">
						#
					</th>
					<th scope="col">
						Tipo Campanha
					</th>
					<th scope="col">
						Data Inicio
					</th>
					<th scope="col">
						Data Fim
					</th>
					<th scope="col">
						Designação
					</th>
				</tr>
			</thead>
			<tbody>
				<tr data-url="1">
					<th scope="row">
						1
					</th>
					<td>
						bla
					</td>
					<td>
						bla
					</td>
					<td>
						bla
					</td>
					<td>
						bla
					</td>
				</tr>
				<tr data-url="2">
					<th scope="row">
						2
					</th>
					<td>
						bla
					</td>
					<td>
						bla
					</td>
					<td>
						bla
					</td>
					<td>
						bla2
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalTitle">Designação</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body">
					<div class="chart-container">
						<canvas id="chart"></canvas>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#data-url" class="btn btn-outline-primary">Mais informação</a>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
</main>