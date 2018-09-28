<div id="third-column" class="cell medium-auto medium-cell-block-y content-column">

    <h2>Patient summary</h2><br/>

    <div id="centre-col" class="grid-x grid-padding-x">

        <div class="cell">

            <div class="grid-x grid-padding-x grid-margin-x small-up-1 medium-up-2 large-up-3">
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
                                <div class="large-auto medium-auto small-11 cell"><a href="concept-b-patient-clinical-gp-connect.php#title">GP Connect</a></div>
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
                                        Mental Health Crisis Plan
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
