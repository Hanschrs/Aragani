<?php $active=5; ?>
<?php require("htmlhead.php"); ?>

<section class="contact row no-gutters">
	<div class="col-md-4 row no-gutters justify-content-center">
		<h1 class="orange text-center">Hubungi Kami</h1>
	</div>
	<div class="col-md-7">
		<form class="form" role="form" autocomplete="off" id="formLogin" action="proses_tanya.php" method="POST">
			<div class="form-group">
				<input type="text" class="form-control form-control-lg" placeholder="Nama*" name="nama">
			</div>
			<div class="form-group">
				<input type="text" class="form-control form-control-lg" placeholder="Email*" name="email">
			</div>
			<div class="form-group">
				<textarea type="text" class="form-control form-control-lg" rows="7" placeholder="Pesan*" name="pesan"></textarea>
			</div>
			<div class="form-group text-center">
				<!-- <button class="btn btn-lg btn-warning">Submit</button> -->
			</div>
		</form>
	</div>
</section>

<?php require("htmlfooter.php") ?>