<?php
require_once 'lib/koneksi.php';
require_once 'lib/lib.php';


$isRequest=false;

if (isset($_POST['mode'])) {
	$isRequest=true;
	$fetch = [];
	$fetch['getparam']=false;
	
	switch ($_POST['mode']) {
		case 'comboharga':
			if (isset($_POST['jenis'])) {
				$fetch['getparam']=true;
				$sql= ' SELECT id_param,nama
						FROM parameter 
						WHERE 	param1 = "harga" AND
								param2 = "'.$_POST['jenis'].'"
						ORDER BY 
							CAST(nama as DECIMAL) ASC';
			// pr($sql);
				$exe   = mysqli_query($con,$sql);

				if (!$exe) { // failed query 
					$fetch['queried'] = false;
				}else{ // success query 
					$fetch['queried'] = true;
					$fetch['total']   = mysqli_num_rows($exe);
				
					// pr($res);
					while ($res=mysqli_fetch_assoc($exe)){
						$fetch['data'][]=array(
							'id_param' =>$res['id_param'],
							'nama'     =>'Rp. '.(number_format($res['nama'])),
						);
					}
				}
			}
		break;

		case 'create':
			// code here
		break;

		case 'edit':
			// code here
		break;

		case 'delete':
			// code here
		break;

		case 'view':
			// code here
		break;

		default:
			// code here
		break;
	}

}

echo json_encode([
	'request' =>$isRequest,
	'fetch'   =>$fetch
]);

?>