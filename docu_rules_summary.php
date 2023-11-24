<h4 class="m-2 text-center"><?= $lang['status']['summary'] ?></h4>
<div class="accordion " id="sommaire">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <?= $lang['rules']['sum-chap-1'] ?>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                <a href="#chap-1"><?= $lang['rules']['sum-chap-1'] ?></a>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <?= $lang['rules']['sum-chap-2'] ?>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                <a href="#chap2-sect1"><?= $lang['rules']['chap-2-sect-1'] ?></a><br>
                <a href="#chap2-sect2"><?= $lang['rules']['chap-2-sect-2'] ?></a><br>
                <a href="#chap2-sect3"><?= $lang['rules']['chap-2-sect-3'] ?></a><br>
                <span>
                    <a class="nested-paragraph" href="#chap2-sect3-para1">Para I:
                        <?= $lang['rules']['sum-chap-2-sect-3-par1'] ?></a><br>
                    <a class="nested-paragraph" href="#chap2-sect3-para2">Para II:
                        <?= $lang['rules']['sum-chap-2-sect-3-par2'] ?></a><br>
                    <a class="nested-paragraph" href="#chap2-sect3-para3">Para III:
                        <?= $lang['rules']['sum-chap-2-sect-3-par3'] ?></a><br>
                    <a class="nested-paragraph" href="#chap2-sect3-para4">Para IV:
                        <?= $lang['rules']['sum-chap-2-sect-3-par4'] ?></a><br>
                </span>
                <a href="#chap2-sect4"><?= $lang['rules']['chap-2-sect-4'] ?></a><br>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <?= $lang['rules']['sum-chap-3'] ?>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                <a href="#chap-3"><?= $lang['rules']['sum-chap-3'] ?></a><br>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <?= $lang['rules']['sum-chap-4'] ?>
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                <a href="#chap-4"><?= $lang['rules']['sum-chap-4'] ?></a><br>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <?= $lang['rules']['sum-chap-5'] ?>
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                <a href="#chap-5"><?= $lang['rules']['sum-chap-5'] ?></a><br>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <?= $lang['rules']['sum-chap-6'] ?>
            </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
            data-bs-parent="#sommaire">
            <div class="accordion-body">
                <a href="#chap-6"><?= $lang['rules']['sum-chap-6'] ?></a><br>
            </div>
        </div>
    </div>
</div>