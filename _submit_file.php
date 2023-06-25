<?php
header("Content-Type: text/html; charset=UTF-8");

if (isset($_POST["submit"], $_POST["title"], $_POST["title_en"], $_POST["author"], $_POST["email"], $_POST["phone"], $_POST["presentation"])) {
    $title = $_POST["title"];
    $title_en = $_POST["title_en"];
    $author = $_POST["author"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $presentation = $_POST["presentation"];

    $video = null;
    if (isset($_FILES["video"])) $video = $_FILES["video"];

    $poster = null;
    if (isset($_FILES["poster"])) $poster = $_FILES["poster"];

    // Save file in papers directory with a random filename
    if (!file_exists("../videos")) mkdir("../videos");
    if ($video !== null) {
        $file_name = uniqid() . uniqid() . $video["name"];
        move_uploaded_file($file["tmp_name"], "../videos/$file_name");
    }

    if (!file_exists("../posters")) mkdir("../posters");
    if ($poster !== null) {
        $file_name = uniqid() . uniqid() . $poster["name"];
        move_uploaded_file($file["tmp_name"], "../posters/$file_name");
    }

    $obj = [
        "title" => $title,
        "title_en" => $title_en,
        "email" => $email,
        "phone" => $phone,
        "presentation" => $presentation,
        "file" => $file_name,
    ];

    // Write and create utf8 file
    if ($video !== null) {
        file_put_contents("../_secure_videos.json", json_encode($obj, JSON_UNESCAPED_UNICODE) . "\n==============================\n", FILE_APPEND);
    } else if ($poster !== null) {
        file_put_contents("../_secure_posters.json", json_encode($obj, JSON_UNESCAPED_UNICODE) . "\n==============================\n", FILE_APPEND);
    } else {
        file_put_contents("../_secure_file.json", json_encode($obj, JSON_UNESCAPED_UNICODE) . "\n==============================\n", FILE_APPEND);
    }

    $sent = true;
}
