<?php require_once 'includes/inc_header.php' ?>
<?php require_once 'includes/inc_navbar.php' ?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
	<!-- Content -->
	<div class="container-fluid py-5">
		<div class="row mt-5">
			<!-- Products -->
			<div class="col-xl-8">
				<h1>Productos</h1>
				<div class="row">
					<?php foreach ($data as $elementos) : ?>
						<div class="col-md-4 col-xs-6 col-xl-3 mb-4">
							<div class="card w-80">
								<img src="assets/images/productos/<?php echo $elementos['imagen']; ?>" alt="<?php echo $elementos['imagen']; ?>" class="card-img-top">
								<div class="card-body p-2 text-center">
									<h5 class="card-title card-text text-truncate"><?php echo $elementos['nombre'] ?>
									</h5>
									<p class="text-success"><?php echo number_format($elementos['precio'], 2); ?></p>

								</div>
								<div class="card-footer bg-transparent text-center">
									<button class="btn btn-sm btn-success do_add_to_cart" data-cantidad="1" data-id="<?php echo $elementos['codigo']; ?>" data-toggle="tooltip" title="Agregar al carrito">
										<i class="fas fa-plus"></i> Agregar al carrito
									</button>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<!-- Cart -->
			<div class="col-xl-4 bg-light" id="load_wrapper">
				<h1>Carrito</h1>
				<!-- Cart content -->
				<div id="cart_content">
					<div class="table-responsive">
						<table class="table table-hover table-striped table-sm">
							<thead>
								<tr>
									<th>Producto</th>
									<th class="text-center">Cantidad</th>
									<th class="text-center">Total</th>
									<th class="text-center">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-middle">
										Producto
										<small class="d-block text-muted">CODIGO 123456789</small>
									</td>
									<td class="align-middle text-center" width="5%">
										<input type="number" class="form-control" min="1" max="50" value="1">
									</td>
									<td class="align-middle text-center">S/ 150.00</td>
									<td class="text-right align-middle"><i class="fas fa-times text-danger"></i></td>
								</tr>
							</tbody>
						</table>
					</div>
					<button class="btn btn-sm btn-danger mb-3">Vaciar carrito</button>

					<!-- Totales -->
					<table class="table">
						<tr>
							<td>SUBTOTAL</td>
							<td class="text-success text-right">S/ 150.00</td>
						</tr>
						<tr>
							<td>I.G.V.</td>
							<td class="text-success text-right">S/ 27.00</td>
						</tr>
						<tr>
							<td>TOTAL</td>
							<td class="text-success text-right">
								<h3>S/ 177.00</h3>
							</td>
						</tr>
					</table>
					<!-- Fin Totales -->
					<button class="btn btn-success btn-sm btn-block">PAGAR AHORA</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END Content -->
</main>

<?php require_once 'includes/inc_footer.php' ?>