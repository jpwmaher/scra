<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php include("include-concept-b-head.php"); ?>
</head>

<?php include("variables-concept-b-3.php"); ?>

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
            <?php include("include-concept-b-patient-3-summary.php"); ?>

            <!-- Tabbed nav -->
            <?php include("include-concept-b-tabbed-nav-3.php"); ?>

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
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#first">Patient Summary</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#second">Appointments</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#third">Encounters (Journal)</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#fourth">Clinical Items</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#fifth">Problems</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#sixth">Allergies</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#seventh">Medications</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#eighth">Referrals</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#ninth">Observations</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#tenth">Investigations</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#eleveneth">Immunisations</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#twelfth">Administrative Items</a> </li>
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
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#first">Patient Summary</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#second">Appointments</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#third">Encounters (Journal)</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#fourth">Clinical Items</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#fifth">Problems</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#sixth">Allergies</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#seventh">Medications</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#eighth">Referrals</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#ninth">Observations</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#tenth">Investigations</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#eleveneth">Immunisations</a> </li>
                                                    <li> <a href="concept-b-patient-3-clinical-gp-connect.php#twelfth">Administrative Items</a> </li>
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

                            <h4>Allergies &amp; Sensitivities</h4>
                            <br />
                            <div class="table-scroll">
                                <table id="Allergies" summary="This table includes information about this patient\'s allergies and adverse reactions" class="hover">
                                  <tbody>
                                      <tr>
                                          <td>There are no reported allergies or sensitivities.</td>
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
                                            <td>Prescribed: 17 Sep 2018</td>
                                            <td>Clarithomycin 250mg</td>
                                            <td>take one tablet twice daily</td>
                                            <td>28 tablet</td>
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
                                            <th>Date first prescribed</th>
                                            <th>Date last issued</th>
                                            <th>Medication Item</th>
                                            <th>Dosage Instructions</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="oddRow">
                                            <td>Repeat Medication</td>
                                            <td>14 Jun 2010</td>
                                            <td>21 Aug 2018</td>
                                            <td>Ibuprofen 400mg tablets</td>
                                            <td></td>
                                            <td>84 tablets</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>Repeat Medication</td>
                                            <td>19 Dec 2016</td>
                                            <td>01 Nov 2018</td>
                                            <td>Candesartan 16mg tablets</td>
                                            <td>One to be taken each day</td>
                                            <td>56 tablet</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>Repeat Medication</td>
                                            <td>22 Feb 2012</td>
                                            <td>01 Nov 2018</td>
                                            <td>Atorvastatin 20mg</td>
                                            <td>2 tablets once daily</td>
                                            <td>112 tablets</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>Repeat Medication</td>
                                            <td>27 Oct 2014</td>
                                            <td>01 Nov 2018</td>
                                            <td>Lansoprazole 30mg</td>
                                            <td>One to be taken each day</td>
                                            <td>84 tablet</td>
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
                                            <td style="min-width: 120px;">10 May 2006</td>
                                            <td>Rheumatoid Arthritis</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td style="min-width: 120px;">22 Feb 2012</td>
                                            <td>Hyperlipidemia</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td style="min-width: 120px;">22 Feb 2012</td>
                                            <td>Essential hypertension</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>15 Mar 2012</td>
                                            <td>Glaucoma</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td style="min-width: 120px;">27 Oct 2014</td>
                                            <td>Hiatal hernia</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>11 Jan 2016</td>
                                            <td>Recurrent urinary tract infection</td>
                                            <td/>
                                            <td/>
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
                                            <td style="min-width: 120px;">10 May 2006</td>
                                            <td>Rheumatoid Arthritis</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td style="min-width: 120px;">22 Feb 2012</td>
                                            <td>Hyperlipidemia</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td style="min-width: 120px;">22 Feb 2012</td>
                                            <td>Essential hypertension</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td style="min-width: 120px;">27 Oct 2014</td>
                                            <td>Hiatal hernia</td>
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
                                            <td>22 Feb 2012</td>
                                            <td>Alcohol consumption</td>
                                            <td/>
                                            <td>12 units per week</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>22 Feb 2012</td>
                                            <td>Hearing difficulty</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>22 Feb 2012</td>
                                            <td>160/90 - blood pressure reading</td>
                                            <td/>
                                            <td></td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>27 Aug 2012</td>
                                            <td>140/90 - blood pressure reading</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>20 Feb 2013</td>
                                            <td>120/90 - blood pressure reading</td>
                                            <td/>
                                            <td></td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>27 Aug 2012</td>
                                            <td>140/90 - blood pressure reading</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>30 Mar 2015</td>
                                            <td>160/90 - blood pressure reading</td>
                                            <td/>
                                            <td></td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>30 Mar 2015</td>
                                            <td>Alcohol consumption</td>
                                            <td/>
                                            <td>14 units per week</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>27 Sep 2015</td>
                                            <td>120/90 - blood pressure reading</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>04 Jun 2017</td>
                                            <td>160/90 - blood pressure reading</td>
                                            <td/>
                                            <td></td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>04 Jun 2017</td>
                                            <td>Alcohol consumption</td>
                                            <td/>
                                            <td>12 units per week</td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>29 Dec 2017</td>
                                            <td>160/90 - blood pressure reading</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>29 Jan 2018</td>
                                            <td>140/90 - blood pressure reading</td>
                                            <td/>
                                            <td></td>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>03 Mar 2018</td>
                                            <td>140/90 - blood pressure reading</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>01 May 2018</td>
                                            <td>120/90 - blood pressure reading</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>10 Oct 2018</td>
                                            <td>120/90 - blood pressure reading</td>
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
                                            <td>30 Oct 2015</td>
                                            <td>Influenza vaccine</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>02 Nov 2016</td>
                                            <td>Influenza vaccine</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>19 Oct 2017</td>
                                            <td>Influenza vaccine</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>01 Nov 2018</td>
                                            <td>Influenza vaccine</td>
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
                                            <td>Positive urine culture</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>11 Jul 2014</td>
                                            <td>Positive urine culture</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>11 Jan 2016</td>
                                            <td>Positive urine culture</td>
                                            <td/>
                                            <td/>
                                        </tr>
                                        <tr class="evenRow">
                                            <td>15 Sep 2018</td>
                                            <td>Positive urine culture</td>
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
                                        <tr class="evenRow">
                                            <td>07 Apr 2016</td>
                                            <td>Seen in hospital casualty</td>
                                            <td/>
                                            <td>Fall at home - fractured right ulna</td>
                                        </tr>
                                        <tr class="oddRow">
                                            <td>16 Mar 2018</td>
                                            <td>Seen in hospital casualty</td>
                                            <td/>
                                            <td>Fall at home - full thickness right forehead laceration 6cm</td>
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

    <?php include("include-concept-a-javascripts.php"); ?>

</body>

</html>
