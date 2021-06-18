<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["CSVToUpload"]["name"]);
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$uploadCheck = 1;


function print_table($array, $city)
{
	echo"<table border='1'>";
	foreach ($array as $key_i => $row)
	{

        // Print table
    	$str = "<tr>";
    	foreach ($row as $key_j => $value) {
    		// Remove special chars
    		$value = preg_replace('/[\x00-\x1F\x7F-\xFF]/', '', $value);
    		if($key_i == 0)
    		{

    			$str .= "<th>". $value ."</th>";
    		}
    		else{
    			if (in_array($city, $row))
    			{
    				$str .= "<td>". $value ."</td>";
    			}
    			
    		}
    	}
    	$str .= "</tr>";

    	echo "$str";
	}

	echo"</table>";
}


function process_csv($csv_path){
	$row = 1;
	echo"<table border='1'>";

	$table_array = array();

	if (($handle = fopen($csv_path, "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	        $num = count($data);
	        $table_array[$row-1] = $data;
	        $row++;
	    }
	    fclose($handle);

	    print_table($table_array, "Dublin");

	}
}



if(isset($_POST["submit"])) {

	if(strtolower($fileType) == "csv"){
		$filename = htmlspecialchars( basename( $_FILES["CSVToUpload"]["name"]));
		
		if (move_uploaded_file($_FILES["CSVToUpload"]["tmp_name"], $target_file)) 
			{
    			echo "The file ". $filename . " has been uploaded.<br/><br/>";
    			process_csv($target_file);
  			} 
  		else{
    			echo "Sorry, there was an error uploading your file.";
  			}
	} 
	else {
	  die("Sorry, the provided file is not a CSV");
	}

}
?>
