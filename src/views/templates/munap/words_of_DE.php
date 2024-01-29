<?php $title_page = $lang['team']['DE']['title-page']; ?>

<?php ob_start(); ?>

<div class="container">
    <div class="row ">

        <!-- Speech DE Start -->
        <div class="col-md-6 col-lg-12 mt-4 wow fadeIn" data-wow-delay="0.3s">
            <h3 class="text-center mb-3"><?= $lang['team']['DE']['word-title'] ?></h3>

            <div class="border border-3 border-primary bo pt-lg-2">
                <img src="img/organes/BE_DE_word.jpg" class="m-lg-2 float-lg-end imgshadow px-2 img-word img-sm-word" alt="DE">
                <p style="text-align: justify;" class="m-2 wow fadeInUp" data-wow-delay="0.2s">
                    <?= $lang['team']['DE']['word-body'] ?>
                </p>
                <br /><br /><br />
            </div>
        </div>
        <!-- Speech DE End -->
    </div>

</div>

<script>
    let List_header = document.getElementsByClassName('nav-link');
    for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
    document.getElementById('munap').setAttribute("class", "nav-link active");
</script>

<?php $content = ob_get_clean();

require_once('src/views/layouts/main.php') ?>