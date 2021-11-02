<?php
	$target_dir = $_SERVER['DOCUMENT_ROOT'] . '/Accueil_Page/images/';
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	echo $_POST["description"];
	echo "</p>";
	echo $target_file;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "</p>File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		} else {
		    echo "File is not an image.";
		    $uploadOk = 0;
	  	}
		// Check if file already exists
		if (file_exists($target_file)) {
		  	echo "Sorry, file already exists.";
		  	$uploadOk = 0;
		}

		if ($uploadOk === 1) {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		    	$path = $_FILES["fileToUpload"]["name"];
		    	$desc = $_POST["description"];
		    	$dom = new DOMDocument;

		    	$document = DOMDocument::load("data.xml" );
		    	$document->formatOutput = TRUE;
				$img = $document->createElement("PHOTO" );
				$img = $document->documentElement->appendChild($img);
				$src = $document->createElement("IMG","images/" . $path);
				$text = $document->createElement("DESCRIPTION", $desc);
				$img->appendChild($src);
				$img->appendChild($text);
				print $document->save("data.xml");
		  	} else {
		    	echo "Sorry, there was an error uploading your file.";
		  	}
		}
	}
?>