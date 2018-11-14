<div id="third-column" class="cell medium-auto medium-cell-block-y content-column">

    <h2>
        <?php echo $label_clinical_cat_2 ?>
    </h2>

    <div class="cell">

        <br/>

        <section id="second" class="info-section" data-magellan-target="second">

            <br/>

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

    </div>

</div>
