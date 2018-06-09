<?php
require_once 'lib/koneksi.php';
require_once 'lib/lib.php';

// pr(isset($_GET['mode']));
if (!isset($_POST['jenis'])) {
	$isRequest=false;
}else{
	$isRequest=true;
	// $sql   = 'select id_param, param1 from parameter where nama="harga" and param2="'.$_POST['jenis'].'"';
	// $sql   =   'select id_param, nama 
	// 			from parameter 
	// 			where 
	// 				param1 in ("harga","type") and 
	// 				param2="'.$_POST['jenis'].'"';
	$sql=	'SELECT id_param,nama
			FROM parameter 
			WHERE 	param1 = "harga" AND
					param2 = "'.$_POST['jenis'].'"
			ORDER BY 
				CAST(nama as DECIMAL) ASC';
// pr($sql);
	$exe   = mysqli_query($con,$sql);
	$fetch = [];

	if (!$exe) { // failed query 
		$fetch['success']=false;
	}else{ // success query 
		$fetch['success']=true;
		$fetch['total'] = mysqli_num_rows($exe);
	
		// pr($res);
		while ($res=mysqli_fetch_assoc($exe)){
			$fetch['data'][]=array(
				'id_param' =>$res['id_param'],
				'nama'     =>'Rp. '.(number_format($res['nama'])),
			);
		}
	}
}
// pr($fetch);
echo json_encode([
	'request' =>$isRequest,
	'fetch'   =>$fetch
]);

?>