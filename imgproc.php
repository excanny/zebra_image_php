<?php

	$file_name = $_FILES["image"]["name"];
	$file_temp = $_FILES["image"]["tmp_name"];
	
										//100 X 100 Thumbnail
	// load the image manipulation class
		require 'Zebra_Image.php';

		// create a new instance of the class
		$image = new Zebra_Image();

		// if you handle image uploads from users and you have enabled exif-support with --enable-exif
		// (or, on a Windows machine you have enabled php_mbstring.dll and php_exif.dll in php.ini)
		// set this property to TRUE in order to fix rotation so you always see images in correct position
		$image->auto_handle_exif_orientation = false;

		// indicate a source image (a GIF, PNG or JPEG file)
		$image->source_path = $file_temp;

		// indicate a target image
		// note that there's no extra property to set in order to specify the target
		// image's type -simply by writing '.jpg' as extension will instruct the script
		// to create a 'jpg' file
		$image->target_path = 'uploads/100/' . $file_name;

		// since in this example we're going to have a jpeg file, let's set the output
		// image's quality
		$image->jpeg_quality = 100;

		// some additional properties that can be set
		// read about them in the documentation
		$image->preserve_aspect_ratio = true;
		$image->enlarge_smaller_images = true;
		$image->preserve_time = true;
		$image->handle_exif_orientation_tag = true;

		// resize the image to exactly 100x100 pixels by using the "crop from center" method
		// (read more in the overview section or in the documentation)
		//  and if there is an error, check what the error is about
		if (!$image->resize(100, 100, ZEBRA_IMAGE_CROP_CENTER)) {

			// if there was an error, let's see what the error is about
			switch ($image->error) {

				case 1:
					echo 'Source file could not be found!';
					break;
				case 2:
					echo 'Source file is not readable!';
					break;
				case 3:
					echo 'Could not write target file!';
					break;
				case 4:
					echo 'Unsupported source file format!';
					break;
				case 5:
					echo 'Unsupported target file format!';
					break;
				case 6:
					echo 'GD library version does not support target file format!';
					break;
				case 7:
					echo 'GD library is not installed!';
					break;
				case 8:
					echo '"chmod" command is disabled via configuration!';
					break;
				case 9:
					echo '"exif_read_data" function is not available';
					break;

			}

		// if no errors
		} //else echo 'Success!';
		
								//300 X 300 Thumbnail
		
		// create a new instance of the class
		$image = new Zebra_Image();

		// if you handle image uploads from users and you have enabled exif-support with --enable-exif
		// (or, on a Windows machine you have enabled php_mbstring.dll and php_exif.dll in php.ini)
		// set this property to TRUE in order to fix rotation so you always see images in correct position
		$image->auto_handle_exif_orientation = false;

		// indicate a source image (a GIF, PNG or JPEG file)
		$image->source_path = $file_temp;

		// indicate a target image
		// note that there's no extra property to set in order to specify the target
		// image's type -simply by writing '.jpg' as extension will instruct the script
		// to create a 'jpg' file
		$image->target_path = 'uploads/300/' . $file_name;

		// since in this example we're going to have a jpeg file, let's set the output
		// image's quality
		$image->jpeg_quality = 100;

		// some additional properties that can be set
		// read about them in the documentation
		$image->preserve_aspect_ratio = true;
		$image->enlarge_smaller_images = true;
		$image->preserve_time = true;
		$image->handle_exif_orientation_tag = true;

		// resize the image to exactly 100x100 pixels by using the "crop from center" method
		// (read more in the overview section or in the documentation)
		//  and if there is an error, check what the error is about
		if (!$image->resize(300, 300, ZEBRA_IMAGE_CROP_CENTER)) {

			// if there was an error, let's see what the error is about
			switch ($image->error) {

				case 1:
					echo 'Source file could not be found!';
					break;
				case 2:
					echo 'Source file is not readable!';
					break;
				case 3:
					echo 'Could not write target file!';
					break;
				case 4:
					echo 'Unsupported source file format!';
					break;
				case 5:
					echo 'Unsupported target file format!';
					break;
				case 6:
					echo 'GD library version does not support target file format!';
					break;
				case 7:
					echo 'GD library is not installed!';
					break;
				case 8:
					echo '"chmod" command is disabled via configuration!';
					break;
				case 9:
					echo '"exif_read_data" function is not available';
					break;

			}

		// if no errors
		} //else echo 'Success!';

		
									//600 X 600 Thumbnail
		
		// create a new instance of the class
		$image = new Zebra_Image();

		// if you handle image uploads from users and you have enabled exif-support with --enable-exif
		// (or, on a Windows machine you have enabled php_mbstring.dll and php_exif.dll in php.ini)
		// set this property to TRUE in order to fix rotation so you always see images in correct position
		$image->auto_handle_exif_orientation = false;

		// indicate a source image (a GIF, PNG or JPEG file)
		$image->source_path = $file_temp;

		// indicate a target image
		// note that there's no extra property to set in order to specify the target
		// image's type -simply by writing '.jpg' as extension will instruct the script
		// to create a 'jpg' file
		$image->target_path = 'uploads/600/' . $file_name;

		// since in this example we're going to have a jpeg file, let's set the output
		// image's quality
		$image->jpeg_quality = 100;

		// some additional properties that can be set
		// read about them in the documentation
		$image->preserve_aspect_ratio = true;
		$image->enlarge_smaller_images = true;
		$image->preserve_time = true;
		$image->handle_exif_orientation_tag = true;

		// resize the image to exactly 100x100 pixels by using the "crop from center" method
		// (read more in the overview section or in the documentation)
		//  and if there is an error, check what the error is about
		if (!$image->resize(600, 600, ZEBRA_IMAGE_CROP_CENTER)) {

			// if there was an error, let's see what the error is about
			switch ($image->error) {

				case 1:
					echo 'Source file could not be found!';
					break;
				case 2:
					echo 'Source file is not readable!';
					break;
				case 3:
					echo 'Could not write target file!';
					break;
				case 4:
					echo 'Unsupported source file format!';
					break;
				case 5:
					echo 'Unsupported target file format!';
					break;
				case 6:
					echo 'GD library version does not support target file format!';
					break;
				case 7:
					echo 'GD library is not installed!';
					break;
				case 8:
					echo '"chmod" command is disabled via configuration!';
					break;
				case 9:
					echo '"exif_read_data" function is not available';
					break;

			}

		// if no errors
		} //else echo 'Success!';
?>