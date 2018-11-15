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
    #tab-3 {
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

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="false" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="1234-accordion" role="tab" id="1234-accordion-label" aria-expanded="false" aria-selected="false">Summary Care Record - enhanced</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="1234-accordion-label" aria-hidden="true" id="1234-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="concept-b-patient-1-clinical.php#first">Allergies &amp; Sensitivities</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#second">Acute Medications</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#third">Current Repeat Medications</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#fourth">Past Repeat Medications</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#fifth">Diagnoses</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#sixth">Problems &amp; issues</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#seventh">Observations</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#eighth">Treatments</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#ninth">Results</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#tenth">Care events</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">GP Connect</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li> <a href="#second">Appointments</a> </li>
                                                    <li> <a href="#third">Encounters (Journal)</a> </li>
                                                    <li> <a href="#fourth">Clinical Items</a> </li>
                                                    <li> <a href="#fifth">Problems</a> </li>
                                                    <li> <a href="#sixth">Allergies</a> </li>
                                                    <li> <a href="#seventh">Medications</a> </li>
                                                    <li> <a href="#eighth">Referrals</a> </li>
                                                    <li> <a href="#ninth">Observations</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Care Plans (1)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
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

                    <!-- Medium-up nav -->
                    <div class="large-3 medium-4 show-for-medium cell" data-sticky-container>
                        <div id="side-nav" class="sticky" data-sticky data-anchor="nhs-timeline">
                            <div class="docs-nav-container">
                                <div class="docs-nav" id="docs-menu">

                                    <ul class="accordion docs-nav-category" data-accordion="12345-accordion" data-allow-all-closed="true" data-multi-expand="false" role="tablist">
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="83435o-accordion" role="tab" id="83435o-accordion-label" aria-expanded="false" aria-selected="false">Summary Care Record - enhanced</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="83435o-accordion-label" aria-hidden="true" id="83435o-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li><a href="concept-b-patient-1-clinical.php#first">Allergies &amp; Sensitivities</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#second">Acute Medications</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#third">Current Repeat Medications</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#fourth">Past Repeat Medications</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#fifth">Diagnoses</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#sixth">Problems &amp; issues</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#seventh">Observations</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#eighth">Treatments</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#ninth">Results</a></li>
                                                    <li><a href="concept-b-patient-1-clinical.php#tenth">Care events</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item is-active" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false">GP Connect</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li> <a href="#second">Appointments</a> </li>
                                                    <li> <a href="#third">Encounters (Journal)</a> </li>
                                                    <li> <a href="#fourth">Clinical Items</a> </li>
                                                    <li> <a href="#fifth">Problems</a> </li>
                                                    <li> <a href="#sixth">Allergies</a> </li>
                                                    <li> <a href="#seventh">Medications</a> </li>
                                                    <li> <a href="#eighth">Referrals</a> </li>
                                                    <li> <a href="#ninth">Observations</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="lvidlv-accordion" role="tab" id="lvidlv-accordion-label" aria-expanded="false" aria-selected="false">Care Plans (1)</a>
                                            <div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="lvidlv-accordion-label" aria-hidden="true" id="lvidlv-accordion">
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="concept-b-patient-1-clinical-mhcp.php" class="">Mental Health Crisis Plan</a></li>
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
                    <div id="nhs-timeline" class="large-10 medium-auto small-12 cell">

                        <h2 data-magellan-target="title" id="title">GP Connect <img src="../img/steth.svg" style="height: 24px;"></h2><br/>

                        <section id="second" class="info-section" data-magellan-target="second">
                            <h4>Appointments</h4>
                            <br />
                            <div class="container-fluid ng-scope">
                                <p> The 'Appointments' capability is not implemented in the GP Connect 0.5.0 specification. </p>
                                <p> 'Appointments' was introduced as part of the GP Connect 1.x.x specification. </p>
                            </div>
                            <br />
                        </section>

                        <section id="third" class="info-section" data-magellan-target="third">
                            <br />
                            <h4>Encounters</h4>
                            <br />
                            <div class="section-main ng-scope" ui-view="main">
                                <div class="ng-scope">

                                    <div class="providerHTMLTables">
                                        <div ng-bind-html="encounterTable.html" class="ng-binding">
                                            <div xmlns="http://www.w3.org/1999/xhtml">
                                                <div>
                                                    <div>
                                                        <p>For the period '06-Aug-2015' to '06-Aug-2018'</p>
                                                    </div>
                                                    <div>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Title</th>
                                                                    <th>Details</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2018-02-01</td>
                                                                    <td>Care navigation</td>
                                                                    <td>Reception signposting regarding exercise classes</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ng-scope">
                                    <div class="col-md-12"> <span class="patientSummary-spinner ng-scope" us-spinner="{radius:20, width:8, length: 16}" spinner-key="encounterSummary-spinner" spinner-start-active="true"></span> </div>
                                </div>
                            </div>
                            <br />
                        </section>

                        <section id="fourth" class="info-section" data-magellan-target="fourth">
                            <br />
                            <h4>Clinical Items</h4>
                            <br />
                            <div class="section-main ng-scope" ui-view="main">
                                <div class="ng-scope">

                                    <div class="providerHTMLTables">
                                        <div ng-bind-html="clinicalItemTable.html" class="ng-binding">
                                            <div xmlns="http://www.w3.org/1999/xhtml">
                                                <div>
                                                    <div>
                                                        <p>For the period '06-Aug-2015' to '06-Aug-2018'</p>
                                                    </div>
                                                    <div>
                                                        <p>No 'Clinical Items' data is recorded for this patient.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ng-scope">
                                    <div class="col-md-12"> <span class="patientSummary-spinner ng-scope" us-spinner="{radius:20, width:8, length: 16}" spinner-key="clinicalSummary-spinner" spinner-start-active="true"></span> </div>
                                </div>
                            </div>
                            <br />
                        </section>

                        <section id="fifth" class="info-section" data-magellan-target="fifth">
                            <br />
                            <h4>Problems</h4>
                            <br />
                            <div class="section-main ng-scope" ui-view="main">
                                <div class="ng-scope">
                                    <div class="providerHTMLTables">
                                        <div ng-bind-html="problemTable.html" class="ng-binding">
                                            <div xmlns="http://www.w3.org/1999/xhtml">
                                                <div>
                                                    <h5>Active Problems and Issues</h5>
                                                    <div>
                                                        <p>All relevant items subject to patient preferences and/or RCGP exclusions</p>
                                                    </div>
                                                    <div>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Start Date</th>
                                                                    <th>Entry</th>
                                                                    <th>Significance</th>
                                                                    <th>Details</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2015-05-01 00:00:00.0</td>
                                                                    <td>Type II Diabetes mellitus</td>
                                                                    <td>Major Active</td>
                                                                    <td>Diabetes type II blood glucose management</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2006-03-01 00:00:00.0</td>
                                                                    <td>Essential hypertension</td>
                                                                    <td>Major Active</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2018-04-25 00:00:00.0</td>
                                                                    <td>Lower back pain</td>
                                                                    <td>Minor Active</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <Br/>
                                                <div>
                                                    <h5>Inactive Problems and Issues</h5>
                                                    <div>
                                                        <p>All relevant items subject to patient preferences and/or RCGP exclusions</p>
                                                    </div>
                                                    <div>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Start Date</th>
                                                                    <th>End Date</th>
                                                                    <th>Entry</th>
                                                                    <th>Significance</th>
                                                                    <th>Details</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1958-08-04 00:00:00.0</td>
                                                                    <td>null</td>
                                                                    <td>Fracture of Clavicle</td>
                                                                    <td>Minor Past</td>
                                                                    <td>Fell off bicycle</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1978-09-03 00:00:00.0</td>
                                                                    <td>null</td>
                                                                    <td>Conjunctivitus</td>
                                                                    <td>Minor Past</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ng-scope">
                                    <div class="col-md-12"> <span class="patientSummary-spinner ng-scope" us-spinner="{radius:20, width:8, length: 16}" spinner-key="problemSummary-spinner" spinner-start-active="true"></span> </div>
                                </div>
                            </div>
                            <br />
                        </section>

                        <section id="sixth" class="info-section" data-magellan-target="sixth">
                            <br />
                            <h4>Allergies</h4>
                            <br />
                            <div class="section-main ng-scope" ui-view="main">
                                <div class="ng-scope">
                                    <div class="providerHTMLTables">
                                        <div ng-bind-html="allergyTable.html" class="ng-binding">
                                            <div xmlns="http://www.w3.org/1999/xhtml">
                                                <div>
                                                    <h5>Current Allergies and Adverse Reactions</h5>
                                                    <div>
                                                        <p>All relevant items subject to patient preferences and/or RCGP exclusions</p>
                                                    </div>
                                                    <div>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Start Date</th>
                                                                    <th>Details</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2016-03-15 00:00:00.0</td>
                                                                    <td>Allergy to Penicillin, Patient experienced rash, nausea and vomiting</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div>
                                                    <h5>Historical Allergies and Adverse Reactions</h5>
                                                    <div>
                                                        <p>All relevant items subject to patient preferences and/or RCGP exclusions</p>
                                                    </div>
                                                    <div>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Start Date</th>
                                                                    <th>End Date</th>
                                                                    <th>Details</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1963-06-02 00:00:00.0</td>
                                                                    <td>null</td>
                                                                    <td>Hayfever, allergy to pollen</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ng-scope">
                                    <div class="col-md-12"> <span class="patientSummary-spinner ng-scope" us-spinner="{radius:20, width:8, length: 16}" spinner-key="allergySummary-spinner" spinner-start-active="true"></span> </div>
                                </div>
                            </div>
                            <br />
                        </section>

                        <section id="seventh" class="info-section" data-magellan-target="seventh">
                            <br />
                            <h4>Medications</h4>
                            <br />
                            <div class="section-main ng-scope" ui-view="main">
                                <div class="ng-scope">
                                    <div class="providerHTMLTables">
                                        <div ng-bind-html="medicationTable.html" class="ng-binding">
                                            <div xmlns="http://www.w3.org/1999/xhtml">
                                                <div>
                                                    <h5>Current Medication Issues</h5>
                                                    <div>
                                                        <p>All relevant items subject to patient preferences and/or RCGP exclusions</p>
                                                    </div>
                                                    <div>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Start Date</th>
                                                                    <th>Medication Item</th>
                                                                    <th>Type</th>
                                                                    <th>Scheduled End Date</th>
                                                                    <th>Days Duration</th>
                                                                    <th>Details</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2018-04-25</td>
                                                                    <td>Tramadol 50mg capsules</td>
                                                                    <td>NHS Medication</td>
                                                                    <td></td>
                                                                    <td>28 days</td>
                                                                    <td>Take 1 or 2 tablets as directed up to 4 times per day</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div>
                                                    <h5>Current Repeat Medications</h5>
                                                    <div>
                                                        <p>All relevant items subject to patient preferences and/or RCGP exclusions</p>
                                                    </div>
                                                    <div>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Last Issued</th>
                                                                    <th>Medication Item</th>
                                                                    <th>Start Date</th>
                                                                    <th>Review Date</th>
                                                                    <th>Number Issued</th>
                                                                    <th>Max Issues</th>
                                                                    <th>Details</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>2018-03-28</td>
                                                                    <td>Metformin 500mg tablets</td>
                                                                    <td>2015-05-01</td>
                                                                    <td>2018-10-15</td>
                                                                    <td>3 issues</td>
                                                                    <td>6 issues</td>
                                                                    <td>Take one tablet three times daily</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2018-03-28</td>
                                                                    <td>Lercanidipine 20mg tablets</td>
                                                                    <td>2006-03-01</td>
                                                                    <td>2018-10-15</td>
                                                                    <td>3 issues</td>
                                                                    <td>6 issues</td>
                                                                    <td>Take one tablet daily</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <br/>
                                                <div>
                                                    <h5>Past Medications</h5>
                                                    <div>
                                                        <p>All relevant items subject to patient preferences and/or RCGP exclusions</p>
                                                    </div>
                                                    <div>
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Start Date</th>
                                                                    <th>Medication Item</th>
                                                                    <th>Type</th>
                                                                    <th>Last Issued</th>
                                                                    <th>Review Date</th>
                                                                    <th>Number Issued</th>
                                                                    <th>Max Issues</th>
                                                                    <th>Details</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1978-09-03</td>
                                                                    <td>Chloramphenicol eye drops preservative free 0.5%</td>
                                                                    <td>NHS Medication</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>1 drop in left eye four times daily for 4 weeks.</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ng-scope">
                                    <div class="col-md-12"> <span class="patientSummary-spinner ng-scope" us-spinner="{radius:20, width:8, length: 16}" spinner-key="medicationSummary-spinner" spinner-start-active="true"></span> </div>
                                </div>
                            </div>
                            <br />
                        </section>

                        <section id="eighth" class="info-section" data-magellan-target="eighth">
                            <br />
                            <h4>Referrals</h4>
                            <br />
                            <div>
                                <div>
                                    <p>For the period '06-Aug-2015' to '06-Aug-2018'</p>
                                </div>
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Priority</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2016-07-02 00:00:00.0</td>
                                                <td>Dr Johnson and Partners</td>
                                                <td>Community Diabetic Clinic</td>
                                                <td>Routine</td>
                                                <td>Needs further support with dietary needs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br />
                        </section>

                        <section id="ninth" class="info-section" data-magellan-target="ninth">
                            <br />
                            <h4>Observations</h4>
                            <br />
                            <div>
                                <div>
                                    <p>All relevant items subject to patient preferences and/or RCGP exclusions</p>
                                </div>
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Entry</th>
                                                <th>Value</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2017-05-07</td>
                                                <td>Foot Risk Classification</td>
                                                <td>Left diabetic foot at low risk</td>
                                                <td>Left diabetic foot at low risk</td>
                                            </tr>
                                            <tr>
                                                <td>2017-05-07</td>
                                                <td>Foot Risk Classification</td>
                                                <td>Right diabetic foot at low risk</td>
                                                <td>Right diabetic foot at low risk</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br />
                        </section>

                        <p id="SendTime">Summary Sent: 27 May 2015 16:42</p>

                        <div class="cell">
                            <hr>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include("../include-concept-b-javascripts.php"); ?>

</body>

</html>
