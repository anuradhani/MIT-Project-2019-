<?php

//https://makitweb.com/how-to-create-and-download-a-zip-file-with-php/
// Create ZIP file
if (isset($_POST['zipbulk'])) {
    $zip = new ZipArchive();
    $filename = "./myzipfile.zip";

    if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
        exit("cannot open <$filename>\n");
    }

    $dir = 'Progress10/';

    // Create zip
    createZip($zip, $dir);

    $zip->close();
    echo "<script type='text/javascript'>window.onload = function() {if(confirm('Zip created successfully!')==true){window.location.href = '../viewprogress10submissions.php';};};</script> ";
    
}

// Create zip
function createZip($zip, $dir) {
    if (is_dir($dir)) {

        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {

                // If file
                if (is_file($dir . $file)) {
                    if ($file != '' && $file != '.' && $file != '..') {

                        $zip->addFile($dir . $file);
                    }
                } else {
                    // If directory
                    if (is_dir($dir . $file)) {

                        if ($file != '' && $file != '.' && $file != '..') {

                            // Add empty directory
                            $zip->addEmptyDir($dir . $file);

                            $folder = $dir . $file . '/';

                            // Read data of the folder
                            createZip($zip, $folder);
                        }
                    }
                }
            }
            closedir($dh);
        }
    }
}

// Download Created Zip file
if (isset($_POST['downloadbulk'])) {

    $filename = "myzipfile.zip";

    if (file_exists($filename)) {
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
        header('Content-Length: ' . filesize($filename));

        flush();
        readfile($filename);
        // delete file
        unlink($filename);
    }
}
?>