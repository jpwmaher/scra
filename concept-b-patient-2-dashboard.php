<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php include("include-concept-b-head.php"); ?>
</head>

<?php include("variables-concept-b-2.php"); ?>

<style>
    #tab-1 {
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
            <?php include("include-concept-b-patient-2-summary.php"); ?>

            <!-- Tabbed nav -->
            <?php include("include-concept-b-tabbed-nav-2.php"); ?>

            <!-- Main content -->
            <div class="large-12 medium-12 cell">
                <div id="centre-col" class="grid-x grid-padding-x">

                    <div class="cell">

                        <div class="grid-x grid-padding-x grid-margin-x small-up-1 medium-up-3 large-up-4">
                            <div class="cell dashboard-panel alert-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell"><?php echo $label_alerts ?></div>
                                        <div class="large-shrink medium-shrink small-1  cell"><i class="fi-alert" style="color: white"></i></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><strong><a href="#" style="color: white;">Child Care Alert</a></strong></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><strong><a href="#" style="color: white;">Violent Behaviour</a></strong></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">Add an alert</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-plus" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel flag-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell"><?php echo $label_flags ?></div>
                                        <div class="large-shrink medium-shrink small-1  cell"><i class="fi-flag" style="color: white"></i></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><strong><a href="#" style="color: white;">Reasonable Adjustments (2)</a></strong></div>
                                            <div class="large-shrink medium-shrink small-1 cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><strong><a href="#" style="color: white;"><?php echo $label_mhcp ?></a></strong></div>
                                            <div class="large-shrink medium-shrink small-1 cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell">Add a flag</div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-plus" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Clinical</div>
                                        <div class="large-shrink medium-shrink small-1  cell"><img src="img/pill.svg" style="height: 24px;"></div>
                                    </div>
                                </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="#" data-open="exampleModal1">Summary Care Record - enhanced</a></div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-auto medium-auto small-11 cell"><a href="concept-b-patient-2-clinical-gp-connect.php#title">GP Connect</a></div>
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
                                            <div class="large-auto medium-auto small-11 cell">
                                                <a href="#">
                                                    <?php echo $label_mhcp ?>
                                                </a>
                                            </div>
                                            <div class="large-shrink medium-shrink small-1  cell"><i class="fi-arrow-right" style="color: white"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Patient details</div>
                                <div class="large-shrink medium-shrink small-1  cell"><img src="img/demographic.svg" style="height: 24px;"></div>
                            </div>
                            </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell">
                                                <a href="#">
                                                    <?php echo $label_cat_1 ?>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell">
                                                <a href="#">
                                                    <?php echo $label_cat_2 ?>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell"><a href="#">Power of Attorney</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cell dashboard-panel">
                                <span class="panel-title">
                                    <div class="grid-x">
                                        <div class="large-auto medium-auto small-11 cell">Care providers</div>
                                <div class="large-shrink medium-shrink small-1  cell"><img src="img/steth.svg" style="height: 24px;"></div>
                            </div>
                            </span>
                                <ul class="alert-panel-list">
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell"><a href="#">GP</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell"><a href="#">Nominated Pharmacy</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-x">
                                            <div class="large-12 medium-12 small-12 cell"><a href="#">Mental Health Care Provider</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
                <a href="concept-b-patient-2-clinical.php#title" class="button large primary expanded">Yes</a> View record
            </div>
            <div class="large-4 medium-4 small-6 cell">
                <a href="concept-b-patient-2-dashboard.php" class="button large hollow expanded">No</a> Access refused
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

    <!-- Modal 2 -->
    <div class="reveal large" id="exampleModal2" data-reveal>
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h5>Accessing in an emergency<br/></h5>
                <p>You may access the patient's record if they are not able to give permission. For example, they are unconscious, or unable to understand the question. <a href="#">Tell me more</a></p>
            </div>
            <div class="large-12 medium-12 cell">
                <form data-abide novalidate action="#" method="get" autocomplete="off">
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> Please provide an explanation for accessing the patient's record</p>
                    </div>
                    <label>Please enter an explanation <span style="color: red;">* </span>
                    <input type="text" placeholder="" required style="max-width: 600px;" required>
                    </label>
            </div>
            <div class="cell">
                <fieldset class="large-6 columns">
                    <button class="button" type="submit" value="Submit">Continue</button>
                    <button class="button hollow" type="reset" value="Reset">Cancel</button>
                </fieldset>
                </form>
            </div>
            <hr><br/><br/>
            <div class="cell" style="font-weight: bold;"><br/>
                <i class="fi-alert" style="color: red;"></i>&nbsp;Any inappropriate breach of patient confidentiality will be a matter for disciplinary and potentially legal and/or professional proceedings. If in doubt speak to your manager or privacy officer.
            </div>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <!-- Modal 3 -->
    <div class="reveal large" id="exampleModal3" data-reveal>
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h5>Other options for gaining access<br/></h5>
                <p>In exceptional circumstances you may be justified in accessing the patient's record without their permission. <a href="#">Tell me more</a></p>
            </div>
            <div class="cell">
                <form>
                    <div class=" cell"><br/>
                        <input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label for="pokemonRed">Access made in the public interest</label><br/>
                        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Access required by statute</label><br/>
                        <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Access required by Court Order</label><br/>
                    </div>
                    <div class="cell"><br/>
                        <label>Please enter an explanation
                    <input type="text" placeholder="" required style="min-width: 100%;  max-width: 600px;">
                    </label>
                    </div>
                </form>
            </div>
            <div class="cell">
                <a href="concept-b-patient-2-clinical.php#title" class="button primary">Continue</a>&nbsp;
                <a href="concept-b-patient-2-dashboard.php" class="button hollow" style="border-color: transparent;">Cancel</a>
            </div>
            <hr><br/>
            <div class="cell" style="font-weight: bold;"><br/>
                <i class="fi-alert" style="color: red;"></i>&nbsp;Any inappropriate breach of patient confidentiality will be a matter for disciplinary and potentially legal and/or professional proceedings. If in doubt speak to your manager or privacy officer.
            </div>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <?php include("include-concept-a-javascripts.php"); ?>

</body>

</html>
