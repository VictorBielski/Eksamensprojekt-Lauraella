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
    $pagesid = $_POST['pagesid'];

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

                if (empty($imageTitle) || empty($imageDesc) || empty($pagesid)) {
                    header("Location: produkter.php?upload=empty");
                    exit();
                } else {
                    $sql = "SELECT * FROM galleri;";
                    if (!$stmt = $link->prepare($sql)) {
                        echo "SQL statement failed!";
                    } else {
                        $stmt->execute();

                        $result = $stmt->get_result();
                        $rowCount = $result->num_rows;
                        // Image order +1
                        $setImageOrder = $rowCount + 1;

                        // Inserting data from the image into the database
                        $sql = "INSERT INTO galleri (titleGallery, descGallery, imgFullNameGallery, orderGallery, pages_id) VALUES (?, ?, ?, ?, ?);";
                        if (!$stmt = $link->prepare($sql)) {
                            echo "SQL statement failed!";
                        } else {
                            $stmt->bind_param("ssssi", $imageTitle, $imageDesc, $imageFullName, $setImageOrder, $pagesid);
                            $stmt->execute();

                            // Uploading image to server
                            move_uploaded_file($fileTempName, $fileDestination);

                            header("Location: produkter.php?upload=success");
                        }
                    }

                }
            } else {
                echo "Billedets størrelse er for stort!";
                exit();
            }
        } else {
            echo "Der opstod en fejl!";
            exit();          
        }
    } else {
        echo "Denne filtype er ikke understøttet. De understøttede filtyper er: jpg, jpeg samt png";
        exit();
    }



}