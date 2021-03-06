<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php include("include-concept-b-head.php"); ?>
</head>

<?php include("variables-concept-b-1.php"); ?>

<style>
    #tab-2 {
        background-color: #005EB8 !important;
        color: #fefefe;
        font-weight: bold;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
    }

</style>

<body>

    <?php include("../include-concept-b-scrolltotop.php"); ?>

    <div id="content-main" class="grid-container full">

        <div class="grid-x grid-padding-x grid-margin-x">

            <!-- Masthead -->
            <?php include("include-concept-b-masthead.php"); ?>

            <!-- Patient summary -->
            <?php include("include-concept-b-patient-1-summary.php"); ?>

            <!-- Tabbed nav -->
            <?php include("include-concept-b-tabbed-nav-1.php"); ?>

            <div class="cell">
                <div id="centre-col" class="grid-x grid-padding-x grid-margin-x">

                    <!-- Mobile nav -->
                    <div class="hide-for-medium cell">
                        <div id="side-nav">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_1 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <?php include("include-concept-b-nav-cat-1-active.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_2 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="concept-b-patient-1-details-contacts.html#contacts">Contacts &amp; next of kin</a></li>
                                                    <li><a href="concept-b-patient-1-details-contacts.html#poa">Power of attorney</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_3 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">GP details</a></li>
                                                    <li><a href="#">Other GPs registered at this practice</a></li>
                                                    <li><a href="#">Nominated pharmacy</a></li>
                                                    <li><a href="#">Mental Health Care Provider</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_4 ?>
                                            </a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Chargeability status</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: red !important;">
                                                <?php echo $label_alerts ?> &nbsp;<i class="fi-alert" style="color: white"></i> (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Child Care Alert</a></li>
                                                    <li><a href="#">Violent behaviour</a></li>
                                                    <li><a href="#">Add an alert +</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">
                                                <?php echo $label_flags ?> &nbsp;<i class="fi-flag" style="color: white"></i> (3)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Reasonable Adjustments (2)</a></li>
                                                    <li><a href="concept-b-patient-1-clinical-mhcp.html#title">Mental Health Crisis Plan</a></li>
                                                    <li><a href="#">Add a flag +</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Medium-up nav -->
                    <div class="large-3 medium-4 show-for-medium cell" data-sticky-container>
                        <div id="side-nav" class="sticky" data-sticky data-anchor="nhs-timeline">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_1 ?>
                                            </a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <?php include("include-concept-b-nav-cat-1-active.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title">
                                                <?php echo $label_cat_2 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="<?php echo $link_contacts ?>">Contacts &amp; next of kin</a></li>
                                                    <li><a href="<?php echo $link_contacts ?>#poa">Power of attorney</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="concept-b-patient-1-details-nok.html" class="accordion-title">
                                                <?php echo $label_cat_3 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="#">GP details</a></li>
                                                    <li><a href="#">Other GPs registered at this practice</a></li>
                                                    <li><a href="#">Nominated pharmacy</a></li>
                                                    <li><a href="#">Mental Health Care Provider</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="concept-b-patient-1-details-nok.html" class="accordion-title">
                                                <?php echo $label_cat_4 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o2-accordion-label" aria-hidden="true" id="83435o2-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="#">Chargeability status</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: red !important;">
                                                <?php echo $label_alerts ?> &nbsp;<i class="fi-alert" style="color: white"></i> (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Child Care Alert</a></li>
                                                    <li><a href="#">Violent behaviour</a></li>
                                                    <li><a href="#">Add an alert +</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">
                                                <?php echo $label_flags ?> &nbsp;<i class="fi-flag" style="color: white"></i> (3)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Reasonable Adjustments (2)</a></li>
                                                    <li><a href="#">Mental Health Crisis Plan</a></li>
                                                    <li><a href="#">Add a flag +</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main content -->
                    <div id="nhs-timeline" class="large-10 medium-auto cell">

                        <h2>Key demographics <img src="../img/demographic.svg" style="height: 24px;"></h2><br/>

                        <div id="name" class="cell" data-magellan-target="name">
                            <h5>Names</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x">
                                        <div class="medium-6 small-12 large-3 cell">
                                            <div class="panel-info-group cell">
                                                <span class="panel-label">Usual name:</span><br/><span><?php echo $firstname ?> <?php echo $surname ?></span><br/><span class="panel-info-note">Effective since: <?php echo $dob ?></span>
                                            </div>
                                        </div>
                                        <div class="medium-6 small-12 large-3 cell">
                                            <div class="panel-info-group cell">
                                                <span class="panel-label">Preferred name:</span><br/><span class="panel-info-none">Not recorded</span>
                                            </div>
                                        </div>
                                        <div class="medium-6 small-12 large-3 cell">
                                            <div class="panel-info-group cell">
                                                <span class="panel-label">Other names:</span><br/><span class="panel-info-none">Not recorded</span>
                                            </div>
                                        </div>
                                        <div class="medium-6 small-12 large-3 cell">
                                            <div class="panel-info-group cell">
                                                <span class="panel-label">Previous names:</span><br/><span class="panel-info-none">Not recorded</span>
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
                            <h5>Key details</h5>

                            <div id="panel-key" class="grid-x">
                                <div class="medium-6 large-3 cell">
                                    <div class="panel-info-group cell">
                                        <span class="panel-label">Gender:</span><br/><span><?php echo $gender ?></span>
                                    </div>
                                </div>
                                <div class="medium-6 large-3 cell">
                                    <div class="panel-info-group cell">
                                        <span class="panel-label">NHS Number:</span><br/><span>123 454 545</span>
                                    </div>
                                </div>
                                <div class="medium-6 large-3 cell">
                                    <div class="panel-info-group cell">
                                        <span class="panel-label">Date of birth:</span><br/><span><?php echo $dob ?></span>
                                    </div>
                                </div>
                                <div class="medium-6 large-3 cell">
                                    <div class="panel-info-group cell">
                                        <span class="panel-label">Place of birth:</span><br/><span><?php echo $town ?></span>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div id="address" class="cell" data-magellan-target="address">
                            <br/><br/><br/>
                            <h5>Address</h5>

                            <div id="panel-address" class="grid-x">

                                <div class="panel-info-group medium-6 large-3 cell">
                                    <span class="panel-label">Usual address:</span><br/><span><?php include("include-concept-b-address.php"); ?></span><br/><br/>
                                </div>
                                <div class="panel-info-group cell"><br/><br/>
                                    <a href="#" class="small hollow button">View address history</a>
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

    <?php include("../include-concept-b-javascripts.php"); ?>

</body>

</html>
