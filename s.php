<?php
// ფაილის სახელი, რომელიც უნდა ჩამოიტვირთოს
$file = 'index.html';

if (file_exists($file)) {
    // ვაყენებთ შესაბამის headers-ებს ჩამოტვირთვისთვის
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    
    // ვკითხულობთ და გამოგვაქვს ფაილი
    readfile($file);
    exit;
} else {
    echo "ფაილი ვერ მოიძებნა.";
}
?>
https://leqso7.github.io/download.php