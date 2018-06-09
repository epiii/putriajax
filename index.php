<?php 
require_once 'lib/koneksi.php'; 
require_once 'lib/lib.php'; 
?>
<html>
<head>
	<title>Parameter Data</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" /> -->
	<!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
	<!-- <script src="js/jquery-latest.min.js" type="text/javascript"></script> -->
	<!-- <script src="js/popper.min.js"></script> -->

	<!-- <script type="text/javascript" src="js/action.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.js"></script> -->

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

	<style type="text/css">
	.no-js #loader { display: none;  }
	.js #loader { display: block; position: absolute; left: 100px; top: 0; }
	.pageLoader {
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: url(assets/images/loading.gif) center no-repeat #fff;
		opacity: 0.7;
	}
	</style>

	<!-- <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script> -->
	<body>
		<div class="pageLoader"></div>
		<br />

		<div class="container">
			<div class="card">
				<div class="card-body">
					<h2>DATA</h2>
					<p>Data Parameter.</p>
					
					<br />

					<form>
						<div class="form-group row">
							<label for="nama" class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required/>
							</div>
						</div>
						<div class="form-group row">
							<label for="nama" class="col-sm-2 col-form-label">No Telpon</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="no" name="no" placeholder="No Telpon" required/>
							</div>
						</div>


						<?php
							// $sql  = 'SELECT DISTINCT param2 FROM parameter WHERE nama="harga"';
							// $sql  = 'SELECT DISTINCT param2 FROM parameter WHERE param1 IN ("harga","type")';
							$sql  = 'SELECT param2, nama FROM parameter WHERE param1 = "type"';
							$exe  = mysqli_query($con,$sql);
							// var_dump($sql);
						?>
						<div class="form-group row">
							<label for="harga" class="col-sm-2 col-form-label">Jenis</label>
							<div class="col-sm-10">
								<select onchange="hargacb(this.value);" class="form-control" id="jeniscombo" name="jeniscombo">
									<option value="" selected> -- Pilih --</option>
									<?php
										// $sql  = 'SELECT DISTINCT param2 FROM parameter WHERE nama="harga"';
										// $exe  = mysqli_query($con,$sql);
										while ($res=mysqli_fetch_assoc($exe)){
											// echo '<option value="'.$res['param2'].'">'.$res['param2'].'</option>';
											echo '<option value="'.$res['param2'].'">'.$res['nama'].'</option>';
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="harga" class="col-sm-2 col-form-label">Harga</label>
							<div class="col-sm-10">
							<select required  class="form-control" id="hargacombo" name="hargacombo">
									<option value="" selected> -- Pilih Jenis dahulu --</option>
									
								</select>
							</div>
						</div>
						<div class="form-group row">
	    	        		<div class="offset-sm-2 col-sm-10">
            					<input type="submit" id="submit" value="Simpan" class="btn btn-info" />
            					
            				</div>
	            		</div>
					</form>
				</div>
			</div>

			<br />

		</div>
		<br />
	</body>

	<script>
		$(document).ready(function(){
			setTimeout(function(){
				$('.pageLoader').attr('style','display:none');
			}, 700);
		});
		
		function hargacb(jenis) {
			$.ajax({
				url:'action.php',
				data:{
					'mode':'comboharga',
					'jenis':jenis
				},
				// 'jenis='+jenis,
				// data:'jenis='+jenis,
				type:'post',
				dataType:'json',
				beforeSend:function () {
					$('.pageLoader').removeAttr('style');
				},success:function(ret){
					setTimeout(function(){
						$('.pageLoader').attr('style','display:none');

						var opt='';
						if(ret.total==0) opt+='<option>-data kosong-</option>';
						else{
							opt+='<option value="">-- Pilih --</option>';
							$.each(ret.fetch.data, function  (id,val) {
								// opt+='<option value="'+val.id_param+'">'+val.param1+'</option>';
								opt+='<option value="'+val.id_param+'">'+val.nama+'</option>';
							});
						}$('#hargacombo').html(opt);
					}, 700);
				}, error : function (xhr, status, errorThrown) {
					$('.pageLoader').attr('style','display:none');
			        alert('error : ['+xhr.status+'] '+errorThrown);
			    }
			});
		}
	</script>
	
</html>