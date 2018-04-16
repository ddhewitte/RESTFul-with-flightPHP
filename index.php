<?php
	//get
	$nama = 'ddhewitte';
	$umur = '28 tahun';
	$alamat = 'Ratu Jaya Depok City';
	
	$data = array( 
		'nama' => $nama,
		'umur' => $umur,
		'alamat' => $alamat
		);
		
	//parse
	$json_api= json_encode($data);
	
	if($json_api)
	{
		print_r($json_api);
	}else{
		print("error json data");
	}

?>