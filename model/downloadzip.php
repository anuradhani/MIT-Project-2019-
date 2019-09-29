<?php

//https://makitweb.com/how-to-create-and-download-a-zip-file-with-php/
// Create ZIP file
if (isset($_POST['downloadbulk'])) {
    echo 'downloadbulk';
    $zip = new ZipArchive();
    $filename = "./myzipfile.zip";

    if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
        exit("cannot open <$filename>\n");
    }

    $dir = '../files';

    // Create zip
    createZip($zip, $dir);
    
    
    $filename = "myzipfile.zip";

    if (file_exists($filename)) {
        echo 'File exist';
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
        header('Content-Length: ' . filesize($filename));

        flush();
        readfile($filename);
        // delete file
        unlink($filename);
    }

    $zip->close();
}

// Create zip
function createZip($zip, $dir) {
    echo 'create zip';
    if (is_dir($dir)) {
echo 'create zip inside';
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
echo 'create zip inside';
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
    echo 'create zip inside';
}

// Download Created Zip file
if (isset($_POST['download'])) {

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