<?php $title_page = $lang['services']['title-page']; ?>

<?php ob_start(); ?>

<script>
    let List_header = document.getElementsByClassName('nav-link');
    for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
    document.getElementById('services').setAttribute("class", "nav-link active");
</script>

<?php $content = ob_get_clean();

require_once('src/views/layouts/main.php') ?>