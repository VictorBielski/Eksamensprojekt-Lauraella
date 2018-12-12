<?php
if (isset($_POST['submit'])) {

    $newFileName = $_POST['filename'];
    if (empty($newFileName)) {
        $newFileName = "gallery";
    } else {
    // Replacing spaces if made in filename and transforming all to lowercase
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }
    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];
    $imagesid = $_POST['imagesid'];

    $file = $_FILES['file'];

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTempName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // Declaring which filetypes are allowed to upload
    $allowed = array("jpg", "jpeg", "png");

    // Checking for errors and handling them
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 2000000) {
                $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "uploads/" . $imageFullName;

                // Connecting to the database
                include_once "dbcon.php";

                if (empty($imageTitle) || empty($imageDesc)) {
                    header("Location: produkter.php?upload=empty");
                    exit();
                } else {
                    $sql = "SELECT * FROM galleri;";
                    $stmt = mysqli_stmt_init($link);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed!";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        // Inserting data from the image into the database
                        $sql = "INSERT INTO galleri (titleGallery, descGallery, imgFullNameGallery, orderGallery, images_id) VALUES (?, ?, ?, ?, ?);";
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed!";
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssssi", $imageTitle, $imageDesc, $imageFullName, $setImageOrder, $imagesid);
                            mysqli_stmt_execute($stmt);

                            // Uploading image to server
                            move_uploaded_file($fileTempName, $fileDestination);

                            header("Location: produkter.php?upload=success");
                        }
                    }

                }
            } else {
                echo "The file size is too big!";
                exit();
            }
        } else {
            echo "You had an error!";
            exit();          
        }
    } else {
        echo "You need to upload a proper file type!";
        exit();
    }



}