<?php
$en = true;
require "../_submit.php";
?>
<html lang="en_US" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submit and Call for papers - Fourth Conference on Computational Algebra, Computational Number Theory and Applications</title>
        <!-- Fonts -->
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/sahel-font@v3.4.0/dist/font-face.css">
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/shabnam-font@v5.0.1/dist/font-face.css">
        <!-- Style -->
        <link rel="stylesheet" href="/style.css?ver=1">
    </head>
    <body>
        <?php include "_inc/_header.php" ?>

        <section class="normal">
            <h2>Send Paper</h2>

            <?php if (isset($sent)) { ?>
                <font color="green">
                    Thank you for submitting your abstract/article. Just to make sure please resend your paper to our email address at <a href="mailto:cacna2023@kashanu.ac.ir">cacna2023@kashanu.ac.ir</a>.
                </font>
            <?php } ?>

            <p>
                Attention, dear researchers, you can send your article using the form below.

                <form class="submit" action="" method="POST" enctype="multipart/form-data">
                    <label>Title of the article in English <span class="note">*</span></label>
                    <input dir="ltr" type="text" name="title_en" placeholder="Title of the article in English" required>

                    <label>Title of the article is in Persian (If you are an Iranian)</label>
                    <input type="text" name="title" placeholder="Title of the article is in Farsi">

                    <label>Name and surname of the responsible author <span class="note">*</span></label>
                    <input type="text" name="author" placeholder="Name and surname of the responsible author" required>

                    <label>Email <span class="note">*</span></label>
                    <input dir="ltr" type="email" name="email" placeholder="Email" required>

                    <label>Phone number <span class="note">*</span></label>
                    <input dir="ltr" type="text" name="phone" placeholder="Phone number" required>

                    <label>Suggested presentation method <span class="note">*</span></label>
                    <select name="presentation">
                        <option value="oral">Oral presentation</option>
                        <option value="poster">Poster presentation</option>
                    </select>

                    <label>Latex file of the abstract <span class="note">*</span></label>
                    <input type="file" name="file" required>
                    <!-- <div class="note">&#1064;&#1028;&#1065;Ђ&#1064;¬&#1065;‡: &#1064;&#1028;&#1065;†&#1065;‡&#1064;§ &#1064;§&#1065;…&#1066;©&#1064;§&#1065;† &#1064;§&#1065;†&#1064;&#1028;&#1064;®&#1064;§&#1064;&#1025; &#1067;&#1034;&#1066;© &#1065;&#1027;&#1064;§&#1067;&#1034;&#1065;„ &#1065;Ђ&#1064;¬&#1065;Ђ&#1064;&#1031; &#1064;&#1031;&#1064;§&#1064;±&#1064;&#1031;.</div> -->

                    <button name="submit" type="submit">Submit</button>
                </form>

                <div class="note">
                    If you have any questions, you can contact the conference secretariat through the email address <a href="mailto:cacna2023@kashanu.ac.ir">cacna2023@kashanu.ac.ir</a>.
                </div>
            </p>
        </section>

        <?php include "_inc/_footer.php" ?>

        <script type="text/javascript" src="/script.js?ver=1"></script>
    </body>
</html>
