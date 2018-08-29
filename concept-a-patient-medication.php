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
    #tab-2 {
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
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">Patient details</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="<?php echo $link_category ?>#name">Name</a></li>
                                                    <li><a href="<?php echo $link_category ?>#key-details">Key details</a></li>
                                                    <li><a href="<?php echo $link_category ?>#address">Address</a></li>
                                                    <li><a href="<?php echo $link_category ?>#contacts">Contacts &amp; next of kin</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Medication (5)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <span class="summary-label">Current:</span>
                                                    <li><a href="#current-repeat">Current repeat medication (4)</a></li>
                                                    <li><a href="#current-acute">Current acute medication (1)</a></li>
                                                    <span class="summary-label">Previous:</span>
                                                    <li><a href="#previous-repeat">Previous repeat medication (11)</a></li>
                                                    <li><a href="#previous-acute">Previous acute medication (3)</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Care Plans (2)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="<?php echo $link_mhcp ?>" class="">Mental Health Crisis Plan</a></li>
                                                    <li><a href="<?php echo $link_eolp ?>">End of Life Plan</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">Chronic conditions (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">MRSA+</a></li>
                                                    <li><a href="#">HIV+</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">Results (1)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="<?php echo $link_results ?>">Heart rate results (1)</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: red !important;">Behaviour alerts &nbsp;<i class="fi-alert" style="color: white"></i> (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Drug-seeking behaviour</a></li>
                                                    <li><a href="#">Violent behaviour</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">Patient care flags &nbsp;<i class="fi-flag" style="color: white"></i> (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">DNR</a></li>
                                                    <li><a href="#">Reasonable adjustments</a></li>

                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Medium-up side nav -->
                    <div class="large-3 medium-4 small-12 cell show-for-medium" data-sticky-container data-sticky-on="large">
                        <div id="side-nav" class="sticky" data-sticky data-anchor="nhs-timeline">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="0uifu0-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">

                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Patient details</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="<?php echo $link_category ?>#name">Name</a></li>
                                                    <li><a href="<?php echo $link_category ?>#key-details">Key details</a></li>
                                                    <li><a href="<?php echo $link_category ?>#address">Address</a></li>
                                                    <li><a href="<?php echo $link_category ?>#contacts">Contacts &amp; next of kin</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Medication (5)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <span class="summary-label">Current:</span>
                                                    <li><a href="#current-repeat">Current repeat medication (4)</a></li>
                                                    <li><a href="#current-acute">Current acute medication (1)</a></li>
                                                    <span class="summary-label">Previous:</span>
                                                    <li><a href="#previous-repeat">Previous repeat medication (11)</a></li>
                                                    <li><a href="#previous-acute">Previous acute medication (3)</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Care Plans (2)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="<?php echo $link_mhcp ?>" class="">Mental Health Crisis Plan</a></li>
                                                    <li><a href="<?php echo $link_eolp ?>">End of Life Plan</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">Chronic conditions (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">MRSA+</a></li>
                                                    <li><a href="#">HIV+</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">Results (1)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="<?php echo $link_results ?>">Heart rate results (1)</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: red !important;">Behaviour alerts &nbsp;<i class="fi-alert" style="color: white"></i> (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Violent behaviour</a></li>
                                                    <li><a href="#">Drug-seeking behaviour</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">Patient care flags &nbsp;<i class="fi-flag" style="color: white"></i> (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">DNR</a></li>
                                                    <li><a href="#">Reasonable Adjustments</a></li>

                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main content -->
                    <div id="nhs-timeline" class="large-10 medium-auto small-12 cell">

                        <h2>Medication <img src="img/pill.svg" style="height: 24px;"></h2><br/>

                        <div id="current-repeat" class="cell" data-magellan-target="current-repeat">
                            <h5>Current repeat medication</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Mental Health</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Sexual Health</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div id="current-acute" class="cell" data-magellan-target="current-acute">
                            <br/><br/><br/>
                            <h5>Current acute medication</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div id="previous-repeat" class="cell" data-magellan-target="previous-repeat">
                            <br/><br/><br/>
                            <h5>Previous repeat medication</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Mental Health</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Sexual Health</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Mental Health</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Sexual Health</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>Sexual Health</span><br/></div>
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
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div id="previous-acute" class="cell" data-magellan-target="previous-acute">
                            <br/><br/><br/>
                            <h5>Previous acute medication</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-6">
                                        <div class="cell marbot"><span class="summary-label">Prescribed:</span><br/><span>16-Aug-17</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Collected:</span><br/><span>Yes</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Medication name:</span><br/><span data-tooltip tabindex="1" title="Description of the medication / purpose / side-effects">Flucloxacillin</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Instructions:</span><br/><span>take one daily</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Quantity: </span><br/><span>28 tablets</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Source: </span><br/><span>GP</span><br/></div>
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
