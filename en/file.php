<?php
$en = true;
require "../_submit_file.php";
?>
<html lang="en_US" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submit Video - Fourth Conference on Computational Algebra, Computational Number Theory and Applications</title>
        <!-- Fonts -->
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/sahel-font@v3.4.0/dist/font-face.css">
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/shabnam-font@v5.0.1/dist/font-face.css">
        <!-- Style -->
        <link rel="stylesheet" href="/style.css?ver=1">
    </head>
    <body>
        <?php include "_inc/_header.php" ?>

        <section class="normal">
            <h2>Submit Video</h2>

            <?php if (isset($sent)) { ?>
                <font color="green">
                    Thank you for submitting your abstract/article. Just to make sure please resend your paper to our email address at <a href="mailto:cacna2023@kashanu.ac.ir">cacna2023@kashanu.ac.ir</a>.
                </font>
            <?php } ?>

            <p>
                Attention, dear researchers, you can send your presentation file using the following form.

                <form class="submit" action="" method="POST" enctype="multipart/form-data">
                    <label>Title of the article/talk in English <span class="note">*</span></label>
                    <input dir="ltr" type="text" name="title_en" placeholder="Title of the article in English" required>

                    <label>Title of the article/talk is in Persian (If you are an Iranian)</label>
                    <input type="text" name="title" placeholder="Title of the article is in Farsi">

                    <label>Name and surname of the responsible author <span class="note">*</span></label>
                    <input type="text" name="author" placeholder="Name and surname of the responsible author" required>

                    <label>Email <span class="note">*</span></label>
                    <input dir="ltr" type="email" name="email" placeholder="Email" required>

                    <label>Phone number <span class="note">*</span></label>
                    <input dir="ltr" type="text" name="phone" placeholder="Phone number" required>

                    <label>Suggested presentation method <span class="note">*</span></label>
                    <select id="extra-field-target" name="presentation" required="">
                        <option selected="">Please select</option>
                        <option value="oral">Oral presentation</option>
                        <option value="poster">Poster presentation</option>
                    </select>

                    <label>Latex file of the abstract <span class="note">*</span></label>
                    <input type="file" name="file" required>
                    <!-- <div class="note">&#1064;&#1028;&#1065;Ђ&#1064;¬&#1065;‡: &#1064;&#1028;&#1065;†&#1065;‡&#1064;§ &#1064;§&#1065;…&#1066;©&#1064;§&#1065;† &#1064;§&#1065;†&#1064;&#1028;&#1064;®&#1064;§&#1064;&#1025; &#1067;&#1034;&#1066;© &#1065;&#1027;&#1064;§&#1067;&#1034;&#1065;„ &#1065;Ђ&#1064;¬&#1065;Ђ&#1064;&#1031; &#1064;&#1031;&#1064;§&#1064;±&#1064;&#1031;.</div> -->

                    <div id="extra-field-for-oral" style="display: none;">
                        <label>Video file <span class="note">*</span></label>
                        <input type="file" name="video" required>
                        <span>Maximum size is 35 MB.</span>
                    </div>
                    <div id="extra-field-for-poster" style="display: none;">
                        <label>PowerPoint file <span class="note">*</span></label>
                        <input type="file" name="poster" required>
                        <span>Maximum size is 10 MB.</span>
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
                        if(this.files[0].size > 1048576 * 36) {
                            alert("File is too big!");
                            this.value = "";
                        };
                    };
                    document.querySelector("#extra-field-for-poster input").onchange = function() {
                        if(this.files[0].size > 2097152 * 5) {
                            alert("File is too big!");
                            this.value = "";
                        };
                    };
                    </script>

                    <button name="submit" type="submit">Submit presentation file</button>
                </form>

                <div class="note">
                    If you have any questions, you can contact the conference secretariat through the email address <a href="mailto:cacna2023@kashanu.ac.ir">cacna2023@kashanu.ac.ir</a>.
                </div>
            </p>
        </section>

        <?php include "_inc/_footer.php" ?>

        <script src="/script.js?ver=1"></script>
    </body>
</html>
