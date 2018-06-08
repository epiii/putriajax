<?php
require_once 'lib/koneksi.php';
require_once 'lib/lib.php';

// pr(isset($_GET['mode']));
if (!isset($_POST['jenis'])) {
	$isRequest=false;
}else{
	$isRequest=true;
	$sql   = 'select id_param, param1 from parameter where nama="harga" and param2="'.$_POST['jenis'].'"';
	$exe   = mysqli_query($con,$sql);
	
	$fetch = [];

	if (!$exe) { // failed query 
		$fetch['success']=false;
	}else{ // success query 
		$fetch['success']=true;
		$fetch['total'] = mysqli_num_rows($exe);
	
		while ($res=mysqli_fetch_assoc($exe)){
			$fetch['data'][]=array(
				'id_param' =>$res['id_param'],
				'param1'   =>'Rp. '.(number_format($res['param1'])),
			);
		}
	}
}

echo json_encode([
	'request' =>$isRequest,
	'fetch'   =>$fetch
]);

?>