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

            <div class="cell show-for-medium">
                <hr>
            </div>

            <div class="cell">
                <div id="centre-col" class="grid-x grid-padding-x grid-margin-x">

                    <div class="hide-for-medium cell">
                        <div id="side-nav">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">Patient details</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="#name">Name</a></li>
                                                    <li><a href="#key-details">Key details</a></li>
                                                    <li><a href="#address">Address</a></li>
                                                    <li><a href="#contacts">Contacts &amp; next of kin</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Medication (5)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <span class="summary-label">Current:</span>
                                                    <li><a href="concept-a-patient-medication.html#current-repeat">Current repeat medication (4)</a></li>
                                                    <li><a href="concept-a-patient-medication.html#current-acute">Current acute medication (1)</a></li>
                                                    <span class="summary-label">Previous:</span>
                                                    <li><a href="concept-a-patient-medication.html#previous-repeat">Previous repeat medication (11)</a></li>
                                                    <li><a href="concept-a-patient-medication.html#previous-acute">Previous acute medication (3)</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Care Plans (2)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="concept-a-patient-mhcp.html" class="">Mental Health Crisis Plan</a></li>
                                                    <li><a href="concept-a-patient-end-of-life.html">End of Life Plan</a></li>
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
                                                    <li><a href="concept-a-patient-results.html">Heart rate results (1)</a></li>
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

                    <div class="large-3 medium-4 show-for-medium cell" data-sticky-container>
                        <div id="side-nav" class="sticky" data-sticky data-anchor="nhs-timeline">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">Patient details</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="#name">Name</a></li>
                                                    <li><a href="#key-details">Key details</a></li>
                                                    <li><a href="#address">Address</a></li>
                                                    <li><a href="#contacts">Contacts &amp; next of kin</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Medication (5)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <span class="summary-label">Current:</span>
                                                    <li><a href="concept-a-patient-medication.html#current-repeat">Current repeat medication (4)</a></li>
                                                    <li><a href="concept-a-patient-medication.html#current-acute">Current acute medication (1)</a></li>
                                                    <span class="summary-label">Previous:</span>
                                                    <li><a href="concept-a-patient-medication.html#previous-repeat">Previous repeat medication (11)</a></li>
                                                    <li><a href="concept-a-patient-medication.html#previous-acute">Previous acute medication (3)</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Care Plans (2)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="concept-a-patient-mhcp.html" class="">Mental Health Crisis Plan</a></li>
                                                    <li><a href="concept-a-patient-end-of-life.html">End of Life Plan</a></li>
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
                                                    <li><a href="><?php echo $link_results ?>">Heart rate results (1)</a></li>
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

                    <div id="nhs-timeline" class="large-10 medium-auto cell">

                        <h2>Patient details <img src="img/demographic.svg" style="height: 24px;"></h2><br/>

                        <div id="name" class="cell" data-magellan-target="name">
                            <h5>Names</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x">
                                        <div class="medium-6 small-12 large-3 cell">
                                            <div class="panel-info-group cell">
                                                <span class="panel-label">Usual name:</span><br/><span><?php echo $firstname  ?> <?php echo $surname ?></span><br/><span class="panel-info-note">Effective since: <?php echo $dob ?></span>
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
                                        <span class="panel-label">Gender:</span><br/><span>Male</span>
                                    </div>
                                </div>
                                <div class="medium-6 large-3 cell">
                                    <div class="panel-info-group cell">
                                        <span class="panel-label">NHS Number:</span><br/><span><?php echo $nhsno  ?></span>
                                    </div>
                                </div>
                                <div class="medium-6 large-3 cell">
                                    <div class="panel-info-group cell">
                                        <span class="panel-label">Date of birth:</span><br/><span><?php echo $dob  ?></span>
                                    </div>
                                </div>
                                <div class="medium-6 large-3 cell">
                                    <div class="panel-info-group cell">
                                        <span class="panel-label">Place of birth:</span><br/><span>Stratford-Upon-Avon</span>
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
                                <div class="medium-12 small-12 large-4 cell">
                                    <div class="panel-info-group medium-6 cell">
                                        <span class="panel-label">Usual address:</span><br/><span><?php include("include-concept-a-address.php"); ?></span><br/><br/>
                                    </div>
                                    <div class="panel-info-group medium-6 cell">
                                        <span class="panel-label">Temporary address:</span><br/>
                                        <span>101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span><br/>
                                        <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/>
                                    </div>
                                    <div class="panel-info-group medium-12 cell"><br/><br/>
                                        <a href="#" class="small hollow button">View address history</a>
                                    </div>
                                </div>
                                <div class="medium-12 small-12 large-8 cell">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.734470898985!2d-1.7101831842046784!3d52.19369907975372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870ce339784b357%3A0xd44312aac27f785a!2sHenley+St%2C+Stratford-upon-Avon+CV37+6QW!5e0!3m2!1sen!2suk!4v1532443354453" width="100%s" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <div id="address-history" class="medium-6 small-12 large-4 cell" style="display: none;">
                                    <div class="panel-info-group cell">
                                        <span class="panel-label">Previous  address:</span><br/>
                                        <span>101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span><br/>
                                        <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/>
                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div id="contacts" class="cell" data-magellan-target="contacts">
                            <br/><br/><br/>
                            <h5>Contacts &amp; next of kin</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                                        <div class="cell marbot"><span class="summary-label">Name:</span><br/><span>Anne Hathaway</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Relationship:</span><br/><span>Spouse</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Address:</span><br/><span><a target="_blank"  href="https://goo.gl/maps/eWABxM6Y8Ut">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</a></span><br/>
                                        </div>
                                        <div class="cell marbot"><span class="summary-label">Telephone:</span><br/><span>01234 567890</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Email: </span><br/><span>anne@thebard.com</span><br/></div>

                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                </div>
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                                        <div class="cell marbot"><span class="summary-label">Name:</span><br/><span>Terry Shakespeare</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Relationship:</span><br/><span>Brother</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Address:</span><br/><span><a target="_blank"  href="https://goo.gl/maps/eWABxM6Y8Ut">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</a></span><br/>
                                        </div>
                                        <div class="cell marbot"><span class="summary-label">Telephone:</span><br/><span>01234 567890</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Email: </span><br/><span>tez@thebard.com</span><br/></div>

                                    </div>
                                </div>
                                <div class="cell">
                                    <hr>
                                    <span class="data-source">via GP Connect</span> <span class="small-text">on 21-Jul-2018 at 07:32</span>
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
