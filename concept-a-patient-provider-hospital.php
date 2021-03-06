<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php include("include-concept-a-head.php"); ?>
</head>

<?php include("variables-concept-a.php"); ?>

<style>
    #tab-3 {
        background-color: #005EB8 !important;
        color: #fefefe;
        font-weight: bold;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
    }

</style>

<body>

    <?php include("include-concept-a-scrolltotop.php"); ?>

    <div id="content-main" class="grid-container full">
        <div class="grid-x grid-padding-x grid-margin-x">

            <!-- Masthead -->
            <?php include("include-concept-a-masthead.php"); ?>

            <!-- Patient summary -->
            <?php include("include-concept-a-patient-summary.php"); ?>

            <!-- Tabbed nav -->
            <?php include("include-concept-a-tabbed-nav.php"); ?>

            <div class="cell">
                <div id="centre-col" class="grid-x grid-padding-x grid-margin-x">

                    <!-- Mobile side nav -->
                    <div class="hide-for-medium cell">
                        <div id="side-nav">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">GP</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <?php include("include-concept-a-nav-prov-1.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Hospital</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <?php include("include-concept-a-nav-prov-2-active.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Mental Health</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li>
                                                        <a href="<?php echo $link_mhcp ?>" class="">
                                                            <?php echo $label_mhcp ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">Sexual Health</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Sexual health link</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">Social Care</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Social care link</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Medium-up side nav -->
                    <div class="show-for-medium large-3 medium-4 cell" data-sticky-container>
                        <div id="side-nav" class="sticky" data-sticky data-anchor="nhs-timeline">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">GP</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <?php include("include-concept-a-nav-prov-1.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Hospital</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <?php include("include-concept-a-nav-prov-2-active.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Mental Health</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li>
                                                        <a href="<?php echo $link_mhcp ?>" class="">
                                                            <?php echo $label_mhcp ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">Sexual Health</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Sexual health link</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">Social Care</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Social care link</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main content -->
                    <div id="nhs-timeline" class="large-9 medium-8 cell">

                        <h2>Hospital <img src="img/hospital.svg" style="height: 24px;"></h2><br/>

                        <div id="name" class="cell" data-magellan-target="name">
                            <h5>Contacts</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x grid-padding-x">
                                        <div class="medium-6 small-6 large-4 cell">
                                            <div class="panel-info-group cell">
                                                <img src="img/clinician-headshot.png" style="width: 100%;"><br/><br/>
                                                <span class="panel-label">Primary Clinician:</span><br/><span>Dr Robert Staff</span><br/><span>07234 567890</span><br/><span><a href="#">robert@thehospital.co.uk</a></span><br/>
                                            </div>
                                        </div>
                                        <div class="medium-6 small-6 large-4 cell">
                                            <div class="panel-info-group cell">
                                                <img src="img/clinician-headshot-2.png" style=" width: 100%;"><br/><br/>
                                                <span class="panel-label">Secondary Clinician:</span><br/><span>Dr Elizabeth Wright</span><br/><span>07234 567890</span><br/><span><a href="#">elizabeth@thehospital.co.uk</a></span><br/>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div id="key-details" class="cell" data-magellan-target="key-details">
                            <br/><br/><br/>
                            <h5>Care events <span style="font-size: 12px; font-weight: normal;">(in last 6 months)</span></h5>

                            <div id="panel-key" class="grid-x">
                                <div class="large-6 cell">
                                    <div class="medium-4 large-2 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Date:</span><br/><span>16-Aug-18</span>
                                        </div>
                                    </div>
                                    <div class="medium-4 large-2 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Clinician visited:</span><br/><span>Dr. Manab Kumar Chowdhury</span>
                                        </div>
                                    </div>
                                    <div class="medium-4 large-2 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Diagnoses:</span><br/><span>n/a</span>
                                        </div>
                                    </div>
                                    <div class="medium-12 large-6 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Summary:</span><br/><span>Nullam sagittis odio urna, finibus commodo turpis porttitor in. Pellentesque id varius dui</span><br/><br/>
                                            <span class="panel-label">Results:</span><br/>
                                            <span><a href="<?php echo $link_results ?>">Heart rate <img src="img/heart.svg" style="height: 14px;"></a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="medium-12 large-6 cell">
                                    <div class="flex-video">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/4d-tb1nYoP4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>

                            </div>
                        </div>

                        <div id="address" class="cell" data-magellan-target="address">
                            <br/><br/><br/>
                            <h5>Medications</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Hospital</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Hospital</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>22-Jun-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Sudocreme</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>apply when itchy</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>100ml</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Hospital</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>08-Jun-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Ciprofloxacin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Hospital</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("include-concept-a-javascripts.php"); ?>

</body>

</html>
