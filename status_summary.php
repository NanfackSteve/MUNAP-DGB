<h4 class="m-2 text-center"><?= $lang['status']['summary'] ?></h4>
<div class="accordion " id="sommaire">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <?= $lang['status']['sum-title-1'] ?>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                <a href="#title1-chap1"><?= $lang['status']['title-1-chap-1'] ?></a><br>
                <a href="#title1-chap2"><?= $lang['status']['title-1-chap-2'] ?></a>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <?= $lang['status']['sum-title-2'] ?>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                <a href="#title2-chap1"><?= $lang['status']['title-2-chap-1'] ?></a><br>
                <a href="#title2-chap2"><?= $lang['status']['title-2-chap-2'] ?></a><br>
                <span>
                    <a class="nested-paragraph"
                        href="#title2-chap2-sect1"><?= $lang['status']['title-2-chap-2-sect-1'] ?></a><br>
                    <a class="nested-paragraph"
                        href="#title2-chap2-sect2"><?= $lang['status']['title-2-chap-2-sect-2'] ?></a><br>
                    <a class="nested-paragraph"
                        href="#title2-chap2-sect3"><?= $lang['status']['title-2-chap-2-sect-3'] ?></a><br>
                    <a class="nested-paragraph"
                        href="#title2-chap2-sect4"><?= $lang['status']['title-2-chap-2-sect-4'] ?></a><br>
                </span>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <?= $lang['status']['sum-title-3'] ?>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                <a href="#title3-chap1"><?= $lang['status']['title-3-chap-1'] ?></a><br>
                <a href="#title3-chap2"><?= $lang['status']['title-3-chap-2'] ?></a><br>
                <span>
                    <a class="nested-paragraph"
                        href="#title3-chap2-sect1"><?= $lang['status']['title-3-chap-2-sect-1'] ?></a><br>
                    <a class="nested-paragraph"
                        href="#title3-chap2-sect2"><?= $lang['status']['title-3-chap-2-sect-2'] ?></a><br>
                    <a class="nested-paragraph"
                        href="#title3-chap2-sect3"><?= $lang['status']['title-3-chap-2-sect-3'] ?></a><br>
                    <a class="nested-paragraph"
                        href="#title3-chap2-sect4"><?= $lang['status']['title-3-chap-2-sect-4'] ?></a><br>
                </span>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <?= $lang['status']['sum-title-4'] ?>
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                ...
            </div>
        </div>
    </div>
</div>