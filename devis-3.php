<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Digiket</title>
    <meta name="description" content="Digiket">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Digiket">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <?php include_once 'link.php'; ?>

    <meta name="theme-color" content="#fafafa">
</head>

<body>

<?php include_once 'header.php'; ?>

<section class="content-wrapper" data-aos="fade-right">
    <div class="home-banner portfolio">
        <div class="left-text">
            <div class="d-flex flex-column">
                <div class="big-text"><p>rejoindre<br>
                        l'équipe</p></div>
                <div class="text-para">
                    <p>Nous sommes une équipe active, dynamique et multiculturelle.</p>
                </div>
                <div class="video-wrapper">
                    <div class="video-aspect-ratio">
                        <!--<iframe class="youtube-video" src="https://www.youtube.com/embed/rDYdeq3JW_E">
                        </iframe>-->
                        <iframe class="youtube-video" src="https://www.youtube.com/embed/andpkOiAN_4"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-side devis-3 contact">

            <form class="contact-form">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="nom" placeholder="NOM"/>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="prenom" placeholder="prenom"/>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="email" placeholder="E-mail"/>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="contact" placeholder="contact"/>
                    </div>

                    <div class="col-sm-6">
                        <a onclick="selectAttachment('#attachment1','.atchbtn1 .button-name')"
                           class="atchbtn1 attachment-custom-btn"><span class="button-name">pièce jointe (1)</span> <i
                                    class="fa fa-chevron-down icon" aria-hidden="true"></i></a>
                        <input id="attachment1" name="attachment1" type="file" hidden>
                    </div>
                    <div class="col-sm-6">
                        <a onclick="selectAttachment('#attachment2','.atchbtn2 .button-name')"
                           class="atchbtn2 attachment-custom-btn"><span class="button-name">pièce jointe (2)</span> <i
                                    class="fa fa-chevron-down icon" aria-hidden="true"></i></a>
                        <input id="attachment2" name="attachment2" type="file" hidden>
                    </div>
                    <div class="col-sm-12 custom-checkbox mb-4">
                        <input type="checkbox" name="ck" id="ck"/>
                        <label for="ck">Je reste informé de vos nouveaux postes.</label>
                    </div>
                </div>

                <button type="submit" class="regular-button">ENVOYER</button>
            </form>
        </div>
    </div>
</section>

<?php include_once 'script.php'; ?>

<script>
    var fileName = null;
    var defaultBtn = null;

    let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    function selectAttachment(selector, btn) {
        fileName = document.querySelector(btn);
        defaultBtn = document.querySelector(selector);

        defaultBtn.click();

        defaultBtn.addEventListener("change", function () {
            const file = this.files[0];
            if (this.value) {
                let valueStore = this.value.match(regExp);
                fileName.textContent = valueStore;
            }
        });
    }

</script>
</body>
</html>
