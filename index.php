<?php include 'inc/cabecalho.php'; ?>


<div class="container" id="inicio">
	<div class="row fundobranco">
		<div class="col-md-12" align="center">
			<div id="mycarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="lib/img/cozinha.jpg" class="img-responsive">
						<div class="carousel-caption">
						<?php if (isset($_GET ['status']) && ($_GET ['status'] == "ok")){?>
							<span>AEEEEE</span>
							<?php };?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'inc/rodape.php'; ?>