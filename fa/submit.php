<?php
require "../_submit.php";
?>
<html lang="fa_IR" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ارسال مقاله - چهارمین کنفرانس جبر محاسباتی، نظریه‌ی محاسباتی اعداد و کاربردها</title>
        <!-- Fonts -->
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/sahel-font@v3.4.0/dist/font-face.css">
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/shabnam-font@v5.0.1/dist/font-face.css">
        <!-- Style -->
        <link rel="stylesheet" href="/style.css?ver=1">
    </head>
    <body>
        <?php include "_inc/_header.php" ?>

        <section class="normal">
            <h2>ارسال مقاله</h2>

            <?php if (isset($sent)) { ?>
                <font color="green">
                    از ارسال چکیده/مقاله خود متشکریم. فقط برای اطمینان لطفا مقاله خود را دوباره به آدرس ایمیل ما در <a href="mailto:cacna2023@kashanu.ac.ir">cacna2023@kashanu.ac.ir</a> ارسال کنید.
                </font>
            <?php } ?>

            <p>
                قابل توجه پژوهشگران عزیز، برای ارسال مقاله خود می توانید از فرم زیر ارسال کنید.

                <form class="submit" action="" method="POST" enctype="multipart/form-data">
                    <label>عنوان مقاله به فارسی <span class="note">*</span></label>
                    <input type="text" name="title" placeholder="عنوان مقاله به فارسی" required>

                    <label>عنوان مقاله به انگلیسی <span class="note">*</span></label>
                    <input dir="ltr" type="text" name="title_en" placeholder="عنوان مقاله به انگلیسی" required>

                    <label>نام و نام خانوادگی نویسنده مسئول <span class="note">*</span></label>
                    <input type="text" name="author" placeholder="نام و نام خانوادگی نویسنده مسئول" required>

                    <label>ایمیل <span class="note">*</span></label>
                    <input dir="ltr" type="email" name="email" placeholder="ایمیل" required>

                    <label>شماره تماس <span class="note">*</span></label>
                    <input dir="ltr" type="text" name="phone" placeholder="شماره تماس" required>

                    <label>نحوه پیشنهادی ارائه <span class="note">*</span></label>
                    <select name="presentation">
                        <option value="oral">ارائه شفاهی</option>
                        <option value="poster">ارائه پوستر</option>
                    </select>

                    <label>فایل لاتک مقاله <span class="note">*</span></label>
                    <input type="file" name="file" required>
                    <!-- <div class="note">توجه: تنها امکان انتخاب یک فایل وجود دارد.</div> -->

                    <button name="submit" type="submit">ارسال</button>
                </form>

                <div class="note">
                    در صورتی که هر گونه سوالی دارید می توانید با دبیرخانه همایش از طریق نشانی ایمیل <a href="/mailto:cacna2023@kashanu.ac.ir">cacna2023@kashanu.ac.ir</a> تماس حاصل فرمایید.
                </div>
            </p>
        </section>

        <?php include "_inc/_footer.php" ?>

        <script type="text/javascript" src="/script.js?ver=1"></script>
    </body>
</html>
