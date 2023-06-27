<?php
require "../_submit_file.php";
?>
<html lang="fa_IR" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ارسال فایل ارائه - چهارمین کنفرانس جبر محاسباتی، نظریه‌ی محاسباتی اعداد و کاربردها</title>
        <!-- Fonts -->
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/sahel-font@v3.4.0/dist/font-face.css">
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/shabnam-font@v5.0.1/dist/font-face.css">
        <!-- Style -->
        <link rel="stylesheet" href="/style.css?ver=1">
    </head>
    <body>
        <?php include "_inc/_header.php" ?>

        <section class="normal">
            <h2>ارسال فایل ارائه</h2>

            <?php if (isset($sent)) { ?>
                <font color="green">
                    اطلاعات شما دریافت شد، در صورتی که مشکلی در فایل شما وجود داشته باشد با شما تماس خواهیم گرفت. با تشکر
                    <!-- از ارسال چکیده/مقاله خود متشکریم. فقط برای اطمینان لطفا مقاله خود را دوباره به آدرس ایمیل ما در <a href="mailto:cacna2023@kashanu.ac.ir">cacna2023@kashanu.ac.ir</a> ارسال کنید. -->
                </font>
            <?php } ?>

            <p>
                قابل توجه پژوهشگران عزیز، لطفا فایل ارائه خود را از طریق فرم زیر ارسال نمایید.

                <form class="submit" action="" method="POST" enctype="multipart/form-data">
                    <label>عنوان سخنرانی/مقاله به فارسی <span class="note">*</span></label>
                    <input type="text" name="title" placeholder="عنوان مقاله به فارسی" required>

                    <label>عنوان سخنرانی/مقاله به انگلیسی <span class="note">*</span></label>
                    <input dir="ltr" type="text" name="title_en" placeholder="عنوان مقاله به انگلیسی" required>

                    <label>نام و نام خانوادگی نویسنده مسئول <span class="note">*</span></label>
                    <input type="text" name="author" placeholder="نام و نام خانوادگی نویسنده مسئول" required>

                    <label>ایمیل <span class="note">*</span></label>
                    <input dir="ltr" type="email" name="email" placeholder="ایمیل" required>

                    <label>شماره تماس <span class="note">*</span></label>
                    <input dir="ltr" type="text" name="phone" placeholder="شماره تماس" required>

                    <label>نحوه پیشنهادی ارائه <span class="note">*</span></label>
                    <select id="extra-field-target" name="presentation" required="">
                        <option selected="">لطفا انتخاب کنید</option>
                        <option value="oral">ارائه شفاهی</option>
                        <option value="poster">ارائه پوستر</option>
                    </select>

                    <div id="extra-field-for-oral" style="display: none;">
                        <label>ویدئو سخنرانی <span class="note">*</span></label>
                        <input type="file" name="video" required>
                        <span>نهایت حجم: 40 مگابایت</span>
                    </div>
                    <div id="extra-field-for-poster" style="display: none;">
                        <label>فایل پاورپوینت <span class="note">*</span></label>
                        <input type="file" name="poster" required>
                        <span>نهایت حجم: 20 مگابایت</span>
                    </div>

                    <script>
                    document.querySelector("#extra-field-target").onchange = (selectO) => {
                        console.log(selectO, selectO.target.value);

                        document.querySelector("#extra-field-for-oral").style.display = "none";
                        document.querySelector("#extra-field-for-poster").style.display = "none";

                        if (selectO.target.value === "oral") {
                            document.querySelector("#extra-field-for-oral").style.display = "block";
                            document.querySelector("#extra-field-for-oral input").setAttribute("required", "");
                            document.querySelector("#extra-field-for-poster input").removeAttribute("required");
                        }
                        else if (selectO.target.value === "poster") {
                            document.querySelector("#extra-field-for-poster").style.display = "block";
                            document.querySelector("#extra-field-for-poster input").setAttribute("required", "");
                            document.querySelector("#extra-field-for-oral input").removeAttribute("required");
                        }
                    };
                    document.querySelector("#extra-field-for-oral input").onchange = function() {
                        if(this.files[0].size > 1048576 * 40) {
                            alert("حجم فایل انتخابی شما فراتر از حد مجاز است!");
                            this.value = "";
                        };
                    };
                    document.querySelector("#extra-field-for-poster input").onchange = function() {
                        if(this.files[0].size > 2097152 * 20) {
                            alert("حجم فایل انتخابی شما فراتر از حد مجاز است!");
                            this.value = "";
                        };
                    };
                    </script>

                    <button name="submit" type="submit">ارسال فایل ارائه</button>
                </form>

                <div class="note">
                    در صورتی که هر گونه سوالی دارید می توانید با دبیرخانه همایش از طریق نشانی ایمیل <a href="mailto:cacna2023@kashanu.ac.ir">cacna2023@kashanu.ac.ir</a> تماس حاصل فرمایید.
                </div>
            </p>
        </section>

        <?php include "_inc/_footer.php" ?>

        <script src="/script.js?ver=1"></script>
    </body>
</html>
