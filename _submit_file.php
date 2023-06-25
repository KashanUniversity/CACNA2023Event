<?php
header("Content-Type: text/html; charset=UTF-8");

if (isset($_POST["submit"], $_POST["title"], $_POST["title_en"], $_POST["author"], $_POST["email"], $_POST["phone"], $_POST["presentation"])) {
    $title = $_POST["title"];
    $title_en = $_POST["title_en"];
    $author = $_POST["author"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $presentation = $_POST["presentation"];

    $file = null;
    if (isset($_FILES["file"])) $file = $_FILES["file"];

    // Save file in papers directory with a random filename
    if (!file_exists("../papers")) {
        mkdir("../papers");
    }
    if ($file !== null) {
        $file_name = uniqid() . uniqid() . $file["name"];
        move_uploaded_file($file["tmp_name"], "../papers/$file_name");
    }

    $to = [
        "cacna2023@kashanu.ac.ir",
        "alim@kashanu.ac.ir",
        // "98@hi2.in",
        "maxbasecode@gmail.com",
    ];

    $message = "عنوان: $title
عنوان (انگلیسی): $title_en
نویسنده: $author
ایمیل: $email
شماره تماس: $phone
نحوه پیشنهادی ارائه: $presentation
";
    $obj = [
        "title" => $title,
        "title_en" => $title_en,
        "email" => $email,
        "phone" => $phone,
        "presentation" => $presentation,
    ];

    if (isset($file_name)) {
        $message .= "فایل لاتک مقاله: https://cacna2023.kashanu.ac.ir/papers/$file_name";
        $obj["file"] = "https://cacna2023.kashanu.ac.ir/papers/" . $file_name;
    }
    
    // Write and create utf8 file
    file_put_contents("../_secure_papers.txt", $message . "\n==============================\n", FILE_APPEND);
    file_put_contents("../_secure_papers_utf8.txt", utf8_encode($message) . "\n==============================\n", FILE_APPEND);
    file_put_contents("../_secure_papers_url.txt", urlencode($message) . "\n==============================\n", FILE_APPEND);
    file_put_contents("../_secure_papers.json", json_encode($obj, JSON_UNESCAPED_UNICODE) . "\n==============================\n", FILE_APPEND);

    $subject = "ارسال مقاله - چهارمین کنفرانس جبر محاسباتی، نظریه‌ی محاسباتی اعداد و کاربردها";
    $headers = "From: $email";
    foreach ($to as $to_item) {
        mail($to_item, $subject, $message, $headers);
    }
    $sent = true;
}
