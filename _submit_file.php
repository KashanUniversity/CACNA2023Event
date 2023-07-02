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
    if ($video !== null && ($video['error'] == 4 || ($video['size'] == 0 && $video['error'] == 0))) $video = null;

    $poster = null;
    if (isset($_FILES["poster"])) $poster = $_FILES["poster"];
    if ($poster !== null && ($poster['error'] == 4 || ($poster['size'] == 0 && $poster['error'] == 0))) $poster = null;        

    // Save file in papers directory with a random filename
    if (!file_exists("../newvideos")) mkdir("../newvideos");
    if ($video !== null) {
        $file_name = uniqid() . uniqid() . $video["name"];
        move_uploaded_file($video["tmp_name"], "../newvideos/$file_name");
    }

    if (!file_exists("../newposters")) mkdir("../newposters");
    if ($poster !== null) {
        $file_name = uniqid() . uniqid() . $poster["name"];
        move_uploaded_file($poster["tmp_name"], "../newposters/$file_name");
    }

    $obj = [
        "title" => $title,
        "title_en" => $title_en,
        "email" => $email,
        "phone" => $phone,
        "presentation" => $presentation,
        "file" => $file_name,
    ];
    if ($video !== null) {
        $obj["link"] = "https://cacna2023.kashanu.ac.ir/newvideos/" . $file_name;
    } else if ($poster !== null) {
        $obj["link"] = "https://cacna2023.kashanu.ac.ir/newposters/" . $file_name;
    }
    $obj["video"] = $video;
    $obj["poster"] = $poster;

    // Write and create utf8 file
    if ($video !== null) {
        file_put_contents("../_secure_newvideos.json", json_encode($obj, JSON_UNESCAPED_UNICODE) . "\n==============================\n", FILE_APPEND);
    } else if ($poster !== null) {
        file_put_contents("../_secure_newposters.json", json_encode($obj, JSON_UNESCAPED_UNICODE) . "\n==============================\n", FILE_APPEND);
    } else {
        file_put_contents("../_secure_newfiles.json", json_encode($obj, JSON_UNESCAPED_UNICODE) . "\n==============================\n", FILE_APPEND);
    }

    $sent = true;
}
