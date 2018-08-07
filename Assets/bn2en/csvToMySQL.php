<?php 
include('bijoy2unicode.php');
$csvMimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
	if(is_uploaded_file($_FILES['file']['tmp_name'])){
		
		//open uploaded csv file with read only mode
		$csvFile = fopen($_FILES['file']['tmp_name'], 'r');
		
		// skip first line
		// if your csv file have no heading, just comment the next line
		fgetcsv($csvFile);
		
		//parse data from csv file line by line
		while(($line = fgetcsv($csvFile)) !== FALSE){
			if($line[0] != ""){
				echo '<p>INSERT INTO products (code_no,pro_name,amount,buy_price,sale_price) VALUES("'.$line[0].'","'.convertBijoyToUnicode($line[1]).'","'.convertBijoyToUnicode($line[2]).'","'.convertBijoyToUnicode($line[3]).'","'.convertBijoyToUnicode($line[4]).'");</p>';
			}
			
		}
		
		//close opened csv file
		fclose($csvFile);

		
	}else{
		
	}
}else{
	echo 'Invalid file';
}

?>