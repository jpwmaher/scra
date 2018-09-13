<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php include("include-scr-gpc-head.php"); ?>
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
            <?php include("include-scr-gpc-tabbed-nav.php"); ?>

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
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#first">Patient Summary</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#second">Appointments</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#third">Encounters (Journal)</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#fourth">Clinical Items</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#fifth">Problems</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#sixth">Allergies</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#seventh">Medications</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#eighth">Referrals</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#ninth">Observations</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#tenth">Investigations</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#eleveneth">Immunisations</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#twelfth">Administrative Items</a> </li>
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
                                        <li class="accordion-item is-active" data-accordion-item="">
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
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="menu expanded vertical" data-magellan data-deep-linking="true">
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#first">Patient Summary</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#second">Appointments</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#third">Encounters (Journal)</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#fourth">Clinical Items</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#fifth">Problems</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#sixth">Allergies</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#seventh">Medications</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#eighth">Referrals</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#ninth">Observations</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#tenth">Investigations</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#eleveneth">Immunisations</a> </li>
                                                    <li> <a href="scr-gpc-patient-clinical-gp-connect.php#twelfth">Administrative Items</a> </li>
                                                </ul>
                                                <ul class="docs-nav-subcategory">
                                                    <li><a href="#">GP Connect content</a></li>
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
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="accordion-item" data-accordion-item="">
                                            <a href="#" class="accordion-title" aria-controls="yn8tgh-accordion" role="tab" id="yn8tgh-accordion-label" aria-expanded="false" aria-selected="false" style="background: orange !important;">
                                                <?php echo $label_flags ?> &nbsp;<i class="fi-flag" style="color: white"></i> (2)</a>
                                            <div class="accordion-content is-active" data-tab-content="" role="tabpanel" aria-labelledby="yn8tgh-accordion-label" aria-hidden="true" id="yn8tgh-accordion">
                                                <ul class="docs-nav-subcategory">
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
                    <div id="nhs-timeline" class="large-10 medium-auto small-12 cell">

                        <h2 data-magellan-target="title" id="title">Summary Care Record <img src="img/steth.svg" style="height: 24px;"></h2><br/>

                        <div class="callout primary" style="font-weight: 300;">
                            <h3 id="Disclaimer">Sourced from the patient's General Practice record. This summary may not include all the information pertinent to this patient.</h3>
                            <p id="CreateTime">Summary created: 27 May 2015 16:42</p>
                            <p id="RegistrationStartedStatement" class="HighlightedStatement">At the time this record was created, this patient had recently registered with the GP Practice. GP Summary information may not be complete.</p>
                            <p id="WithheldCREItemsHeaderStatement" class="HighlightedStatement">One or more entries have been deliberately withheld from this GP Summary.</p>
                            <p id="Author">Created by: RADFORD, Michelle (Mrs)</p>
                            <p id="Practice">DR DK NANDI'S PRACTICE, 342 Troy Road, Horsforth, Leeds LS18 5TN</p>
                        </div>

                        <section id="first" class="info-section" data-magellan-target="first">

                            <br />

                            <div class="grid-x">
                                <div class="large-auto cell">
                                    <h4>Allergies &amp; Sensitivities</h4>
                                </div>
                                <div class="large-shrink cell mismatch-alert">
                                    <span class="label warning"><a href="#"  data-open="exampleModal1">Conflict(s) with GPC record</a></span>
                                </div>
                            </div>
                            <br />
                            <div class="table-scroll">
                                <table id="Allergies" summary="This table includes information about this patient\'s allergies and adverse reactions" class="hover">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Certainty</th>
                                            <th>Severity</th>
                                            <th>Supporting Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td>15 Jun 2010</td>
                                            <td>Adverse reaction to erythromycin</td>
                                            <td/>
                                            <td/>
                                            <td>severe vomiting</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />

                        </section>

                        <section id="second" class="info-section" data-magellan-target="second">
                            <br />
                            <h4>Acute Medication (issued in the last 12 months)</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="AcuteMeds" summary="This table includes information about this patient's acute medications.">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Medication Item</th>
                                            <th>Dosage Instructions</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td>Acute Medication</td>
                                            <td>Prescribed: 12 Dec 2014</td>
                                            <td>Bisoprolol 1.25mg tablets</td>
                                            <td>take one daily</td>
                                            <td>28 tablet</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>Acute Medication</td>
                                            <td>Prescribed: 09 Dec 2014</td>
                                            <td>Flucloxacillin 250mg capsules</td>
                                            <td>take one 4 times/day</td>
                                            <td>28 capsule</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>Acute Medication</td>
                                            <td>Prescribed: 08 Aug 2014</td>
                                            <td>Flucloxacillin 250mg capsules</td>
                                            <td>take one 4 times/day</td>
                                            <td>28 capsule</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>Acute Medication</td>
                                            <td>Prescribed: 29 Jul 2014</td>
                                            <td>Co-amoxiclav 250mg/125mg tablets</td>
                                            <td>take one 3 times/day</td>
                                            <td>21 tablet</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>Acute Medication</td>
                                            <td>Prescribed: 30 Jun 2014</td>
                                            <td>Co-amoxiclav 250mg/125mg tablets</td>
                                            <td>take one 3 times/day</td>
                                            <td>15 tablet</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>Acute Medication</td>
                                            <td>Prescribed: 02 Jun 2014</td>
                                            <td>Ciprofloxacin 250mg tablets</td>
                                            <td>take one twice daily</td>
                                            <td>10 tablet</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                        </section>

                        <section id="third" class="info-section" data-magellan-target="third">
                            <br />
                            <h4>Current Repeat Medication</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="RepeatMeds" summary="This table includes information about this patient\'s current repeat medications.">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Medication Item</th>
                                            <th>Dosage Instructions</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td>Repeat Medication</td>
                                            <td>Last Issued: 12 Dec 2014</td>
                                            <td>Citalopram 20mg tablets</td>
                                            <td>One to be taken each day</td>
                                            <td>28 tablet</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>Repeat Medication</td>
                                            <td>Last Issued: 12 Dec 2014</td>
                                            <td>Clopidogrel 75mg tablets</td>
                                            <td>take one once daily</td>
                                            <td>28 tablet</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>Repeat Medication</td>
                                            <td>Last Issued: 12 Dec 2014</td>
                                            <td>Colecalciferol 200unit / Calcium carbonate 1.25g chewable tablets</td>
                                            <td>One to be taken each day</td>
                                            <td>112 tablet</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>Repeat Medication</td>
                                            <td>Last Issued: 12 Dec 2014</td>
                                            <td>Digoxin 62.5microgram tablets</td>
                                            <td>take one daily</td>
                                            <td>28 tablet</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>Repeat Medication</td>
                                            <td>Last Issued: 12 Dec 2014</td>
                                            <td>Hydrocortisone 1% / Clotrimazole 1% cream</td>
                                            <td>Apply evenly and sparingly no more than twice each day</td>
                                            <td>30 gram</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>Repeat Medication</td>
                                            <td>Last Issued: 04 Dec 2014</td>
                                            <td>Latanoprost 50micrograms/ml eye drops</td>
                                            <td>one drop to be used at night in the affected eye</td>
                                            <td>2.5 ml</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>Repeat Medication</td>
                                            <td>Last Issued: 30 Sep 2014</td>
                                            <td>Aymes Shake powder (Flavour Not Specified)</td>
                                            <td>one to be taken between meals</td>
                                            <td>1596 gram</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>Repeat Medication</td>
                                            <td>Last Issued: 30 Sep 2014</td>
                                            <td>CareSens N testing strips (Spirit Healthcare Ltd)</td>
                                            <td>use as directed</td>
                                            <td>50 strip</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>Repeat Medication</td>
                                            <td>Last Issued: 02 Jul 2014</td>
                                            <td>Zerobase 11% cream (Thornton &amp; Ross Ltd)</td>
                                            <td>Apply to dry skin areas two or three times daily and rub in well</td>
                                            <td>50 gram</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                        </section>

                        <section id="fourth" class="info-section" data-magellan-target="fourth">
                            <br />
                            <h4>Past Repeat Medication (discontinued in the last 6 months)</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="DiscRepeatMeds" summary="This table includes information about this patient\'s past repeat medications.">
                                    <tbody>
                                        <tr>
                                            <td>The Discontinued Repeat Medications are not included in this summary. This patient may have had repeat medications discontinued that are not shown here.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                        </section>

                        <section id="fifth" class="info-section" data-magellan-target="fifth">
                            <br />
                            <h4>Diagnoses</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="Diagnoses">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Value</th>
                                            <th>Supporting Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td style="min-width: 120px;">12 Dec 2014</td>
                                            <td>Candidal vulvovaginitis</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>06 Jan 2014</td>
                                            <td>Diabetic retinopathy</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>06 Jan 2014</td>
                                            <td>Glaucoma</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>17 Dec 2013</td>
                                            <td>Recurrent urinary tract infection</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>06 Sep 2013</td>
                                            <td>Type II diabetes mellitus with persistent microalbuminuria</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>28 Nov 2012</td>
                                            <td>Chronic kidney disease stage 3</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>06 Jan 2012</td>
                                            <td>Mixed anxiety and depressive disorder</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>01 Mar 2011</td>
                                            <td>Mitral regurgitation</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>01 Mar 2011</td>
                                            <td>Tricuspid regurgitation</td>
                                            <td/>
                                            <td>see report</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>01 Jan 2011</td>
                                            <td>Atrial fibrillation</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>19 May 2010</td>
                                            <td>Basal cell carcinoma</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>19 Jan 2010</td>
                                            <td>Heart failure</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>19 Jan 2009</td>
                                            <td>Eczema</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>19 May 2007</td>
                                            <td>Cataract</td>
                                            <td/>
                                            <td>Laterality: Left</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>27 Jan 2006</td>
                                            <td>Squamous cell carcinoma</td>
                                            <td/>
                                            <td>Fully excised invasive squamous cell carcinoma on the chin of patient. No cervical lymphadenopathy. Histology confirmed a keratoacanthomatous squamous cell carcinoma.</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>08 May 2002</td>
                                            <td>Type II diabetes mellitus</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>08 May 2002</td>
                                            <td>Type II diabetes mellitus</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>08 Jan 2002</td>
                                            <td>Hypercholesterolaemia</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>08 Jan 2002</td>
                                            <td>Hypercholesterolaemia</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>01 May 2001</td>
                                            <td>Uterine prolapse</td>
                                            <td/>
                                            <td>Has had the prolapse for many years but has become more prominent in early Feb 2001</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>01 Dec 1985</td>
                                            <td>Essential hypertension</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>01 Jan 1985</td>
                                            <td>Solar keratosis</td>
                                            <td/>
                                            <td>nose (letter dated 25/01/85) states curetted</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                        </section>

                        <section id="sixth" class="info-section" data-magellan-target="sixth">
                            <br />
                            <h4>Problems &amp; issues</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="Problems">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Value</th>
                                            <th>Supporting Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td>12 Dec 2014</td>
                                            <td>Candidal vulvovaginitis</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>06 Jan 2014</td>
                                            <td>Diabetic retinopathy</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>06 Jan 2014</td>
                                            <td>Glaucoma</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>06 Sep 2013</td>
                                            <td>Type II diabetes mellitus with persistent microalbuminuria</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>08 Jan 2013</td>
                                            <td>GSF status green</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>28 Nov 2012</td>
                                            <td>Chronic kidney disease stage 3</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>09 Jan 2012</td>
                                            <td>Patient's next of kin</td>
                                            <td/>
                                            <td>Daughter's tel number is xxxx xxxxxxx</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>01 Jan 2011</td>
                                            <td>Atrial fibrillation</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>19 Jan 2010</td>
                                            <td>Heart failure</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>08 May 2002</td>
                                            <td>Type II diabetes mellitus</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>08 Jan 2002</td>
                                            <td>Hypercholesterolaemia</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>01 Dec 1985</td>
                                            <td>Essential hypertension</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                        </section>

                        <section id="seventh" class="info-section" data-magellan-target="seventh">
                            <br />
                            <h4>Observations</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="Observations">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Value</th>
                                            <th>Supporting Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td>08 Jan 2013</td>
                                            <td>GSF status green</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                        </section>

                        <section id="eighth" class="info-section" data-magellan-target="eighth">
                            <br />
                            <h4>Treatments</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="Treatments">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Value</th>
                                            <th>Supporting Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td>07 Oct 2014</td>
                                            <td>Influenza vaccine</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>02 Jun 2014</td>
                                            <td>Admission avoidance care started</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>02 Oct 2013</td>
                                            <td>Influenza vaccine</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>10 Oct 2012</td>
                                            <td>Influenza vaccine</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>19 May 2010</td>
                                            <td>Excision biopsy of basal cell carcinoma</td>
                                            <td/>
                                            <td>Right cheek</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>19 Oct 2009</td>
                                            <td>Influenza vaccine</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>01 Oct 2008</td>
                                            <td>Influenza vaccine</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>01 Oct 2007</td>
                                            <td>Influenza vaccine</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>01 Oct 2005</td>
                                            <td>Excision biopsy of basal cell carcinoma</td>
                                            <td/>
                                            <td>left side of forehead</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>17 Aug 2001</td>
                                            <td>Repair of vaginal prolapse and amputation of cervix uteri</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>19 May 1997</td>
                                            <td>First hepatitis A and typhoid vaccination</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>02 Oct 1995</td>
                                            <td>Second hepatitis A and typhoid vaccination</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>04 Mar 1995</td>
                                            <td>First hepatitis A and typhoid vaccination</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>24 Feb 1995</td>
                                            <td>Third polio vaccination</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>30 Jan 1995</td>
                                            <td>Second polio vaccination</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>09 Jan 1995</td>
                                            <td>First polio vaccination</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                        </section>

                        <section id="ninth" class="info-section" data-magellan-target="ninth">
                            <br />
                            <h4>Results</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="Results">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Value</th>
                                            <th>Supporting Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td>02 Mar 2011</td>
                                            <td>Echocardiogram abnormal</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                        </section>

                        <section id="tenth" class="info-section" data-magellan-target="tenth">
                            <br />
                            <h4>Care events</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="Events">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Value</th>
                                            <th>Supporting Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td>08 Dec 2014</td>
                                            <td>Seen by continence nurse</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                    </tbody>
                                </table>
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

    <!-- Modal 1 -->
    <div class="reveal large" id="exampleModal1" data-reveal>
        <div class="grid-x grid-padding-x">
            <br/><br/>
            <h5>Has this patient given permission to view their Summary Care Record / GP Connect information?<br/><br/><br/></h5><br/>
            <div class="large-4 medium-4 small-6 cell" style="margin-bottom: 60px;">
                <a href="concept-b-patient-clinical.php#title" class="button large primary expanded">Yes</a> View record
            </div>
            <div class="large-4 medium-4 small-6 cell">
                <a href="concept-b-patient-dashboard.php" class="button large hollow expanded">No</a> Access refused
            </div>
            <div class="large-4 medium-4 small-12 cell">
                <a href="#" class="button large alert expanded" data-open="exampleModal2">Emergency access</a> The usual legal, ethical and professional obligations apply when accessing a patient's clinical record
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="cell" style="margin-bottom: 60px;">
                <hr>
                <a data-open="exampleModal3">I need to access the record for other reasons</a>
            </div>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <?php include("include-concept-a-javascripts.php"); ?>

</body>

</html>
