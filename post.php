<?php
	//post
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	
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


	/* klo mau tes file ini menggunakan postman
	TIPE    : POST
	PARAM
	  -BODY : pilih ceklist x-www-form-urlencoded
      -KEY  : nama,umur,alamat
	  -VALUES: (isi bebas),(isi bebas),(isi bebas)
	  
	RESULT  : JSON
	*/
	    
?>