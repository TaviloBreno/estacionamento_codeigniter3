
	<?php $this->load->view('layout/navbar'); ?>

	<div class="page-wrap">

		<?php $this->load->view('layout/sidebar'); ?>

		<div class="main-content">
			<div class="container-fluid">
				<div class="page-header">
					<div class="row align-items-end">
						<div class="col-lg-8">
							<div class="page-header-title">
								<i class="ik ik-users bg-blue"></i>
								<div class="d-inline">
									<h5><?php echo $titulo; ?></h5>
									<span><?php echo $subtitulo; ?></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<nav class="breadcrumb-container" aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a title="Home" data-toggle="" href="<?php echo base_url('/'); ?>"><i class="ik ik-home"></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header"><h3><?php echo $titulo; ?></h3></div>
							<div class="card-body">
								<table id="data_table" class="table">
									<thead>
									<tr>
										<th>#</th>
										<th>Usuário</th>
										<th>Email</th>
										<th>Nome</th>
										<th>Ativo</th>
										<th class="text-center">Ações</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($usuarios as $usuario): ?>
									<tr>
										<td><?php echo $usuario->id; ?></td>
										<td><?php echo $usuario->username; ?></td>
										<td><?php echo $usuario->email; ?></td>
										<td><?php echo $usuario->first_name.' '.$usuario->last_name; ?></td>
										<td><?php echo ($usuario->active == 1 ? '<span class="badge badge-success">Sim</span>' : '<span class="badge badge-danger">Não</span>'); ?></td>
										<td>
											<div class="table-actions text-center">
												<a href="#"><i class="ik ik-edit-2"></i></a>
												<a href="#"><i class="ik ik-trash-2"></i></a>
											</div>
										</td>
									</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


