<html class="no-js" lang="en" dir="ltr">

<?php include("include-concept-a-head.php"); ?>

<?php include("variables-concept-a.php"); ?>

<body>

    <a href="#" class="scrollToTop"><i class="fi-arrow-up"></i> Top</a><span class="patient-float"><?php echo $firstname  ?> <?php echo surname  ?> | <?php echo dob  ?></span>

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
                            <div id="summary-name" class="large-6 medium-5 cell summary-panel">
                                <div class="grid-x">
                                    <!-- <div class="shrink cell">
                                <img src="img/tiger.png" style="width: 100px;">
                            </div> -->
                                    <div class="auto cell">
                                        <span class="summary-label">Full name:</span><br/><span class="summary-info summary-info-name"><?php echo $firstname  ?> <?php echo surname  ?></span><br/>
                                        <span class="summary-info summary-info-gender-age" style="padding-top: 100px !important;">Male <span style="color: lightgray">|</span> 42 years old</span>
                                    </div>
                                </div>
                            </div>
                            <div class="large-2 medium-shrink small-6 cell summary-panel">
                                <span class="summary-label">NHS No:</span><br/><span class="summary-info">123 456 7890</span><br/><br/>
                                <span class="summary-label summary-info-gender-age">DOB:</span><br/><span class="summary-info"><?php echo dob  ?></span>
                            </div>
                            <div id="summary-address" class="large-2 medium-shrink small-6 cell summary-panel">
                                <span class="summary-label">Address:</span><br/><span class="summary-info">1 Henley Street, <br/>Stratford, <br/>Warwickshire, <br/>AB12 3DC</span>
                            </div>
                            <div class="large-2 medium-auto small-12 cell summary-panel">
                                <div class="grid-x grid-padding-x">
                                    <div class="small-6 medium-12 cell">
                                        <span class="summary-label">Mobile:</span><br/><span class="summary-info">07123 456 789</span><br/><br/>
                                    </div>
                                    <div class="small-6 medium-12 cell">
                                        <span class="summary-label summary-info-gender-age">Email:</span><br/><span class="summary-info">bill@thebard.com</span>
                                    </div>
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
                            <div class="grid-x  grid-margin-x small-up-2 medium-up-4 large-up-4">

                                <div class="cell"><a class="button primary expanded " href="concept-a-patient-dashboard.html">Summary</a></div>
                                <div class="cell"><a class="button ghosty expanded " href="concept-a-patient-category.html">By category</a></div>
                                <div class="cell"><a class="button ghosty expanded " href="concept-a-patient-provider.html">By provider</a></div>
                                <div class="cell"><a class="button ghosty expanded " href="concept-a-patient-timeline.html">Timeline</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="large-12 medium-12 cell">
                <div id="centre-col" class="grid-x grid-padding-x">

                    <!-- Grid list switch -->
                    <div id="grid-list-switch" class="cell show-for-medium"><i class="fi-thumbnails" style="color: #005EB8;"></i>&nbsp;&nbsp; <i class="fi-list" style="color: lightgray"></i></div>

                    <div class="cell">

                        <div class="grid-x grid-padding-x grid-margin-x small-up-1 medium-up-3 large-up-4">
                            <div class="cell dashboard-panel alert-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Alerts</div>
                                        <div class="large-shrink medium-shrink small-1  cell"><i class="fi-alert" style="color: white"></i></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">Violent behaviour</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">Drug-seeking behaviour</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel flag-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Flags</div>
                                        <div class="large-shrink medium-shrink small-1  cell"><i class="fi-flag" style="color: white"></i></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">DNR</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">Reasonable adjustments</div>
                                            <div class="large-shrink medium-shrink small-1 cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">HIV+</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Care plans</div>
                                        <div class="large-shrink medium-shrink small-1  cell"><img src="img/plan.svg" style="height: 24px;"></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="concept-a-patient-mhcp.html">Mental Health Crisis Plan</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="concept-a-patient-end-of-life.html">End of Life Plan</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Recent events</div>               
                                <div class="large-shrink medium-shrink small-1  cell"><img src="img/clock.svg" style="height: 24px;"></div>
                            </div>
                            </span>
                                <!-- <span class="number-centre">6</span><br/>
                                <span class="dashboard-label">Care events in last 6 months</span> -->
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell"><a href="concept-a-patient-provider.html#key-details">17-Jun-18: &nbsp;</a></div>
                                            <div class="large-12 medium-12 small-12 cell"><a href="concept-a-patient-provider.html#key-details"><strong>GP appointment</strong></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell"><a href="concept-a-patient-timeline.html#nov16">17-Jun-18: &nbsp;</a></div>
                                            <div class="large-12 medium-12 small-12 cell"><a href="concept-a-patient-timeline.html#nov16"><strong>Diagnosis: angina</strong></a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Medicines</div>
                                        <div class="large-shrink medium-shrink small-1  cell"><img src="img/pill.svg" style="height: 24px;"></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="concept-a-patient-medication.html#current-repeat">6 current repeat medications</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="concept-a-patient-medication.html#current-acute">3 acute medications</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="concept-a-patient-medication.html#previous-repeat">4 discontinued medications</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Allergies</div>
                                        <div class="large-shrink medium-shrink small-1  cell"><img src="img/allergy-torso.svg" style="height: 24px;"></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell">12-Feb-14: &nbsp;</div>
                                            <div class="large-12 medium-12 small-12 cell"><strong>Erythromycin</strong></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell">04-Oct-87: &nbsp;</div>
                                            <div class="large-12 medium-12 small-12 cell"><strong>Penicillin</strong></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel panel-greyed-out">
                                <span class="number-centre"><img src="img/plus.svg"></span><br/>
                                <span class="dashboard-label">Add panel to summary view</span>
                            </div>

                            <!--    <div class="cell dashboard-panel">
                                <div class="clipped-circle-graph" data-clipped-circle-graph data-percent="50">
                                    <div class="clipped-circle-graph-progress">
                                        <div class="clipped-circle-graph-progress-fill"></div>
                                    </div>
                                    <div class="clipped-circle-graph-percents">
                                        <div class="clipped-circle-graph-percents-wrapper">
                                            <span class="clipped-circle-graph-percents-number"></span>
                                            <span class="clipped-circle-graph-percents-units">of 100</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!--  <div class="cell dashboard-panel">
                                <div class="clipped-circle-graph" data-clipped-circle-graph data-percent="50">
                                    <div class="clipped-circle-graph-progress">
                                        <div class="clipped-circle-graph-progress-fill"></div>
                                    </div>
                                    <div class="clipped-circle-graph-percents">
                                        <div class="clipped-circle-graph-percents-wrapper">
                                            <span class="clipped-circle-graph-percents-number"></span>
                                            <span class="clipped-circle-graph-percents-units">of 100</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

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
