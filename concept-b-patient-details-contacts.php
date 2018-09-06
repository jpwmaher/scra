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
    #tab-2 {
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

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_1 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <?php include("include-concept-b-nav-cat-1.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_2 ?>
                                            </a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <?php include("include-concept-b-nav-cat-2-active.php"); ?>
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
                                                    <li><a href="concept-b-patient-clinical-mhcp.html#title">Mental Health Crisis Plan</a></li>
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
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">
                                                <?php echo $label_cat_1 ?>
                                            </a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <?php include("include-concept-b-nav-cat-1.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title">
                                                <?php echo $label_cat_2 ?>
                                            </a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <?php include("include-concept-b-nav-cat-2-active.php"); ?>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="concept-b-patient-details-nok.html" class="accordion-title">
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
                                            <a href="concept-b-patient-details-nok.html" class="accordion-title">
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

                        <h2>Contacts &amp; next of kin <img src="img/demographic.svg" style="height: 24px;"></h2><br/>

                        <div id="contacts" class="cell" data-magellan-target="contacts">

                            <h5>Contacts &amp; next of kin</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                                        <div class="cell marbot"><span class="summary-label">Name:</span><br/><span>Anne Hathaway</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Relationship:</span><br/><span>Mother</span><br/></div>
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
                                </div>
                            </div>
                        </div>

                        <div id="poa" class="cell" data-magellan-target="poa">
                            <br/><br/><br/>
                            <h5>Power of Attorney</h5>

                            <div class="grid-x grid-padding-x">
                                <div class="cell">
                                    <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                                        <div class="cell marbot"><span class="summary-label">Name:</span><br/><span>Anne Hathaway</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Relationship:</span><br/><span>Mother</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Address:</span><br/><span><a target="_blank"  href="https://goo.gl/maps/eWABxM6Y8Ut">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</a></span><br/>
                                        </div>
                                        <div class="cell marbot"><span class="summary-label">Telephone:</span><br/><span>01234 567890</span><br/></div>
                                        <div class="cell marbot"><span class="summary-label">Email: </span><br/><span>anne@thebard.com</span><br/></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/vendor/top.js"></script>
    <script src="js/vendor/patient-float.js"></script>
    <script>
        $("[data-clipped-circle-graph]").each(function() {
            var $graph = $(this),
                percent = parseInt($graph.data('percent'), 10),
                deg = 30 + (300 * percent) / 100;
            if (percent > 50) {
                $graph.addClass('gt-50');
            }
            $graph.find('.clipped-circle-graph-progress-fill').css('transform', 'rotate(' + deg + 'deg)');
            $graph.find('.clipped-circle-graph-percents-number').html(percent + '%');
        });

    </script>

</body>

</html>
