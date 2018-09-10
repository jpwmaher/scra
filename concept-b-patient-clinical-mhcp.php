<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php include("include-concept-b-head.php"); ?>
</head>

<?php include("variables-concept-b.php"); ?>

<style>
    #tab-3 {
        background-color: #005EB8 !important;
        color: #fefefe;
        font-weight: bold;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
    }

</style>

<body>

    <?php include("include-concept-b-scrolltotop.php"); ?>

    <div id="content-main" class="grid-container full">

        <div class="grid-x grid-padding-x grid-margin-x">

            <!-- Masthead -->
            <?php include("include-concept-b-masthead.php"); ?>

            <!-- Patient summary -->
            <?php include("include-concept-b-patient-summary.php"); ?>

            <!-- Tabbed nav -->
            <?php include("include-concept-b-tabbed-nav.php"); ?>

            <div class="cell">
                <div id="centre-col" class="grid-x grid-padding-x grid-margin-x">

                    <!-- Mobile nav -->
                    <div class="hide-for-medium cell">
                        <div id="side-nav">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="false" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">Summary Care Record - enhanced</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="#first">Allergies &amp; Sensitivities</a></li>
                                                    <li><a href="#second">Acute Medications</a></li>
                                                    <li><a href="#third">Current Repeat Medications</a></li>
                                                    <li><a href="#fourth">Past Repeat Medications</a></li>
                                                    <li><a href="#fifth">Diagnoses</a></li>
                                                    <li><a href="#sixth">Problems &amp; issues</a></li>
                                                    <li><a href="#seventh">Observations</a></li>
                                                    <li><a href="#eighth">Treatments</a></li>
                                                    <li><a href="#ninth">Results</a></li>
                                                    <li><a href="#tenth">Care events</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">GP Connect</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#first">Patient Summary</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#second">Appointments</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#third">Encounters (Journal)</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#fourth">Clinical Items</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#fifth">Problems</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#sixth">Allergies</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#seventh">Medications</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#eighth">Referrals</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#ninth">Observations</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#tenth">Investigations</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#eleveneth">Immunisations</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#twelfth">Administrative Items</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Care Plans (1)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory" data-magellan data-deep-linking="true">
                                                    <li><a href="#" class="">Mental Health Crisis Plan</a></li>
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
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Summary Care Record - enhanced</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="#first">Allergies &amp; Sensitivities</a></li>
                                                    <li><a href="#second">Acute Medications</a></li>
                                                    <li><a href="#third">Current Repeat Medications</a></li>
                                                    <li><a href="#fourth">Past Repeat Medications</a></li>
                                                    <li><a href="#fifth">Diagnoses</a></li>
                                                    <li><a href="#sixth">Problems &amp; issues</a></li>
                                                    <li><a href="#seventh">Observations</a></li>
                                                    <li><a href="#eighth">Treatments</a></li>
                                                    <li><a href="#ninth">Results</a></li>
                                                    <li><a href="#tenth">Care events</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">GP Connect</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#first">Patient Summary</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#second">Appointments</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#third">Encounters (Journal)</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#fourth">Clinical Items</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#fifth">Problems</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#sixth">Allergies</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#seventh">Medications</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#eighth">Referrals</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#ninth">Observations</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#tenth">Investigations</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#eleveneth">Immunisations</a> </li>
                                                    <li> <a href="concept-b-patient-clinical-gp-connect.php#twelfth">Administrative Items</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Care Plans (1)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory" data-magellan data-deep-linking="true">
                                                    <li><a href="#" class="">Mental Health Crisis Plan</a></li>
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
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">
                                                <?php echo $label_flags ?> &nbsp;<i class="fi-flag" style="color: white"></i> (3)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Mental Health Crisis Plan</a></li>
                                                    <li><a href="#">Reasonable Adjustments (2)</a></li>

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

                        <h2 id="title" data-magellan-target="title">Mental Health Crisis Plan <img src="img/plan.svg" style="height: 24px;"></h2><br/>

                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                                    <div class="cell marbot"><span class="summary-label">Created by:</span><br/><span>Dr. Neveryoumind</span><br/></div>
                                    <div class="cell marbot"><span class="summary-label">Created on:</span><br/><span>16-Aug-17</span><br/></div>
                                    <div class="cell marbot"><span class="summary-label">Last updated:</span><br/><span>16-Aug-17</span><br/></div>
                                    <div class="cell marbot"><span class="summary-label">Telephone:</span><br/><span>01234 567 890</span><br/></div>
                                    <div class="cell marbot"><span class="summary-label">Email: </span><br/><span><a href="#">email@address.com</a></span><br/></div>
                                </div>
                            </div>
                            <div class="cell">
                                <hr>
                            </div>
                        </div>

                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <h5>Warning signs</h5>
                                <ol>
                                    <li>First warning sign</li>
                                    <li>Second warning sign</li>
                                    <li>Another warning sign</li>
                                </ol>
                            </div>
                        </div>

                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <h5>Internal coping strategies</h5>
                                <ol>
                                    <li>First coping strategy</li>
                                    <li>Second coping strategy</li>
                                    <li>Another coping strategy</li>
                                </ol>
                            </div>
                        </div>

                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <h5>Emergency contacts during crisis</h5>
                                <ol>
                                    <li>Firstname Surname - <strong>01234 567890 </strong></li>
                                    <li>Firstname Surname - <strong>01234 567890 </strong></li>
                                    <li>Local Urgent Care Services - <strong>01234 567890 </strong></li>
                                    <li>Suicide Prevention Lifeline - <strong>01234 567890 </strong></li>
                                </ol>
                            </div>
                        </div>

                        <div class="grid-x grid-padding-x">
                            <div class="cell">
                                <hr>
                                <span class="data-source">via National Record Locator Service</span> <span class="small-text">on 21-Jul-2018 at 07:32</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include("include-concept-b-javascripts.php"); ?>

</body>

</html>
