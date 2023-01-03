<!-- main header/slider -->
<section class="slider<?= !isset($is_home) ? " mini-slider" : "" ?>">
    <img src="/logo.png" alt="دانشگاه کاشان">
    <h1>
        <span>4th</span>
        Conference on Computational Algebra, Computational Number Theory and Applications
    </h1>
    <h2>
        March 15 - 17, 2023
    </h2>
    <div class="arrow-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm0 18c4.42 0 8-3.58 8-8s-3.58-8-8-8-8 3.58-8 8 3.58 8 8 8zm1-8h3l-4 4-4-4h3V8h2v4z" fill="rgba(255,255,255,1)"/></svg>
    </div>
</section>

<!-- nav -->
<nav>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>">
        <li>Home</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>speakers.php">
        <li>Speakers</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>scientific-committee.php">
        <li>Scientific Committee</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>executive-committee.php">
        <li>Executive Committee</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>registration.php">
        <li>Registration</li>
    </a>
    <a href="/<?= isset($en) ? "en/" : "fa/" ?>submit.php">
        <li>Send Paper</li>
    </a>
    <!-- <li><a href="/schedule.php">Schedule</a></li> -->
    <!-- <li><a href="/contact.php">Contact</a></li> -->
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
