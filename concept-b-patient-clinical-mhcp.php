<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>Concept B - SCRa - SOW 132</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/scra.css">
    <link rel="stylesheet" href="css/scra-concepts.css">
    <link rel="stylesheet" href="css/foundation-icons.css" />
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>

<body>

    <a href="#" class="scrollToTop"><i class="fi-arrow-up"></i> Top</a><span class="patient-float">Katherine Smith | 30-Dec-2008</span>

    <div id="content-main" class="grid-container full">
        <div class="grid-x grid-padding-x grid-margin-x">
            <div class="cell">
                <img src="img/nhs-digital-logo-left.jpg" style="height: 30px; padding: 5px 0px;">
                <a href="#" style="float: right; padding: 5px 0px;">New patient search</a>
            </div>

            <div class="cell">
                <div id="patient-summary" class="grid-x grid-padding-x">
                    <div class="cell">
                        <div class="grid-x grid-padding-x">
                            <div id="summary-name" class="large-6 medium-4 cell summary-panel">
                                <div class="grid-x">
                                    <!-- <div class="shrink cell">
                                <img src="img/tiger.png" style="width: 100px;">
                            </div> -->
                                    <div class="auto cell">
                                        <span class="summary-label">Full name:</span><br/><span class="summary-info summary-info-name">Katherine Smith</span><br/>
                                        <span class="summary-info summary-info-gender-age" style="padding-top: 100px !important;">Female <span style="color: lightgray">|</span> 9 years old</span>
                                    </div>
                                </div>
                            </div>
                            <div class="large-2 medium-3 small-6 cell summary-panel">
                                <span class="summary-label">NHS No:</span><br/><span class="summary-info">123 456 7890</span><br/><br/>
                                <span class="summary-label summary-info-gender-age">DOB:</span><br/><span class="summary-info">30-Dec-2008</span>
                            </div>
                            <div id="summary-address" class="large-2 medium-3 small-6 cell summary-panel">
                                <span class="summary-label">Address:</span><br/><span class="summary-info">1 Henley Street, <br/>Stratford, <br/>Warwickshire, <br/>AB12 3DC</span>
                            </div>
                            <div id="summary-address" class="large-2 medium-2 small-12 cell summary-panel">
                                <div class="grid-x grid-margin-x small-up-5 medium-up-1 large-up-1">
                                    <div class="cell lozenge-wrap"> <span class="alert alert-lozenge">CCA</span></div>
                                    <div class="cell lozenge-wrap"> <span class="alert alert-lozenge">Violent</span></div>
                                    <div class="cell lozenge-wrap"><span class="flag-panel summary-lozenge">RA</span></div>
                                    <div class="cell lozenge-wrap"><span class="flag-panel summary-lozenge">MHCP</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabbed nav -->
            <div class="cell">
                <div class="large-12 medium-12 cell">
                    <div class="grid-x grid-padding-x">
                        <div class="cell" id="main-nav">
                            <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-3">
                                <div class="cell"><a class="button ghosty expanded " href="concept-b-patient-dashboard.html">Summary</a></div>
                                <div class="cell"><a class="button ghosty expanded " href="concept-b-patient-details.html">Admin</a></div>
                                <div class="cell"><a class="button primary expanded " href="concept-b-patient-clinical.html">Clinical</a></div>
                                <!--      <div class="cell"><a class="button ghosty expanded " href="concept-b-patient-timeline.html">Timeline</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cell">
                <div id="centre-col" class="grid-x grid-padding-x grid-margin-x">

                    <div class="hide-for-medium cell">
                        <div id="side-nav">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">Patient details</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
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
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: red !important;">Patient alerts &nbsp;<i class="fi-alert" style="color: white"></i> (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Child Care Alert</a></li>
                                                    <li><a href="#">Violent behaviour</a></li>
                                                    <li><a href="#">Add an alert +</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">Patient care flags &nbsp;<i class="fi-flag" style="color: white"></i> (3)</a>
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

                    <div class="large-3 medium-4 show-for-medium cell" data-sticky-container>
                        <div id="side-nav" class="sticky" data-sticky data-anchor="nhs-timeline">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="true" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Summary Care Record - enhanced</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="concept-b-patient-clinical.html#first">Allergies &amp; Sensitivities</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#second">Acute Medications</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#third">Current Repeat Medications</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#fourth">Past Repeat Medications</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#fifth">Diagnoses</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#sixth">Problems &amp; issues</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#seventh">Observations</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#eighth">Treatments</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#ninth">Results</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#tenth">Care events</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#eleventh">Advice to Patients &amp; Carers</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#twelfth">Personal Preferences</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#thirteenth">Services, Care Professionals &amp; Carers</a></li>
                                                    <li><a href="concept-b-patient-clinical.html#fourteenth">Social &amp; Personal Circumstances</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">GP Connect</a>
                                            <div class="accordion-content " data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li> <a href="#first">Patient Summary</a> </li>
                                                    <li> <a href="#second">Appointments</a> </li>
                                                    <li> <a href="#third">Encounters (Journal)</a> </li>
                                                    <li> <a href="#fourth">Clinical Items</a> </li>
                                                    <li> <a href="#fifth">Problems</a> </li>
                                                    <li> <a href="#sixth">Allergies</a> </li>
                                                    <li> <a href="#seventh">Medications</a> </li>
                                                    <li> <a href="#eighth">Referrals</a> </li>
                                                    <li> <a href="#ninth">Observations</a> </li>
                                                    <li> <a href="#tenth">Investigations</a> </li>
                                                    <li> <a href="#eleventh">Immunisations</a> </li>
                                                    <li> <a href="#twelvth">Administrative Items</a> </li>
                                                </ul>
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">GP Connect content</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Care Plans (1)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="concept-b-patient-clinicial-mhcp.html#title" class="">Mental Health Crisis Plan</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: red !important;">Patient alerts &nbsp;<i class="fi-alert" style="color: white"></i> (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">Child Care Alert</a></li>
                                                    <li><a href="#">Violent behaviour</a></li>
                                                    <li><a href="#">Add an alert +</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">Patient care flags &nbsp;<i class="fi-flag" style="color: white"></i> (3)</a>
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