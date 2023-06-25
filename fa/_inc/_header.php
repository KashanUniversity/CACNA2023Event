<!-- main header/slider -->
<section class="slider<?= !isset($is_home) ? " mini-slider" : "" ?>">
    <img src="/logo.png" alt="دانشگاه کاشان">
    <h1>
        <span>چهارمین</span>
        کنفرانس جبر محاسباتی، نظریه‌ی محاسباتی اعداد و کاربردها
        (یادبود پروفسور علی‌رضا اشرفی)
    </h1>
    <h2>
        ۱۳ الی ۱۵ تیر ماه ۱۴۰۲
        <!-- ۲۴ الی ۲۶ اسفند ماه ۱۴۰۱ -->
    </h2>
    <div class="arrow-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm0 18c4.42 0 8-3.58 8-8s-3.58-8-8-8-8 3.58-8 8 3.58 8 8 8zm1-8h3l-4 4-4-4h3V8h2v4z" fill="rgba(255,255,255,1)"/></svg>
    </div>
</section>

<!-- nav -->
<nav>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>">
        <li>صفحه‌ی اصلی</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>objectives.php">
        <li>اهداف همایش</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>speakers.php">
        <li>سخنران ها</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>scientific-committee.php">
        <li>کمیته علمی</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>executive-committee.php">
        <li>کمیته اجرایی</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>registration.php">
        <li>ثبت‌نام</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>file.php">
        <li>ارسال ویدئو</li>
    </a>
    <a href="https://math.kashanu.ac.ir/fa/form/1040/%DB%B4th-conference-on-computational-algebra-computational-number-theory-and-applications-memorial-of-professor-alireza-ashrafi-">
        <li>پرداخت</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>submit.php">
        <li>ارسال مقاله</li>
    </a>
    <!-- <li><a href="/schedule.php">برنامه</a></li> -->
    <!-- <li><a href="/contact.php">تماس با ما</a></li> -->
    <?php if (isset($en)) { ?>
        <a href="/fa/index.php">
            <li>Persian/فارسی</li>
        </a>
    <?php } else { ?>
        <a href="/en/index.php">
            <li>English/انگلیسی</li>
        </a>
    <?php } ?>
</nav>
