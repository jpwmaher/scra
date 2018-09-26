<div id="third-column" class="cell medium-auto medium-cell-block-y content-column">

    <!-- <div class="grid-x grid-padding-x grid-margin-x">
        <div id="timeline-filters" class="cell">
            <div class="grid-x grid-padding-x">
                <fieldset class="large-10 medium-9 small-12 cell">
                    <input id="checkbox1" type="checkbox" checked><label for="checkbox1">Care events</label>
                    <input id="checkbox2" type="checkbox" checked><label for="checkbox2">Diagnoses</label>
                    <input id="checkbox3" type="checkbox" checked><label for="checkbox3">Medications</label>
                    <input id="checkbox4" type="checkbox" checked><label for="checkbox4">Results</label>
                </fieldset>
                <div class="large-2 medium-3 small-12 cell" style="float: right;">
                    <a class="button hollow tiny expanded" style="font-weight: 300;"><i class="fi-magnifying-glass"></i>&nbsp;Search timeline</a>
                </div>
            </div>
        </div>
    </div> -->

    <h2>
        <?php echo $label_tab_4 ?>
    </h2>

    <br/>

    <div class="timeline">

        <div id="first" class="timeline-item" data-magellan-target="first">
            <div class="timeline-icon">
                <img src="img/pill.svg" class="timeline-icon-new">
            </div>
            <div id="jul18" class="timeline-content" data-magellan-target="jul18">
                <hr>
                <p class="timeline-content-date">18-Jul-18</p>
                <a href="<?php echo $link_medication ?>#current-acute">
                    <h5><strong>New acute medication</strong></h5>
                    <p>Flucloxacillin</p>
                    <p>240 dose</p>
                    <p>Once per day</p>
                </a>
                <p><span class="summary-label">Prescribed by Dr. Doctor</span></p>
                <hr>
            </div>
        </div>

        <div id="apr18" class="timeline-item" data-magellan-target="apr18">
            <div class="timeline-icon">
                <img src="img/heart.svg" class="timeline-icon-new">
            </div>
            <div class="timeline-content right">
                <hr>
                <p class="timeline-content-date">23-Apr-18</p>
                <a href="<?php echo $link_results ?>">
                    <h5><strong>Heart scan</strong></h5>
                    <img src="img/heart-results.jpg" style="max-width: 200px;">
                    <p>View report</p>
                </a>
                <p><span class="summary-label">Pinderfields General Hospital</span></p>
                <hr>
            </div>
        </div>

        <div id="second" class="timeline-item" data-magellan-target="second">
            <div class="timeline-icon">
                <img src="img/steth.svg" class="timeline-icon-new">
            </div>
            <div id="nov17" class="timeline-content" data-magellan-target="nov17">
                <hr>
                <p class="timeline-content-date">21-Nov-17</p>
                <a href="<?php echo $link_provider ?>#key-details">
                    <h5><strong>GP appointment</strong></h5>
                    <p>Blood pressure abnormal (high)</p>
                    <p>Shortness of breath</p>
                </a>
                <p><span class="summary-label">Appointment with Dr. Livingstone</span></p>
                <hr>
            </div>
        </div>

        <div id="aug17" class="timeline-item" data-magellan-target="aug17">
            <div class="timeline-icon">
                <img src="img/heart.svg" class="timeline-icon-new">
            </div>
            <div class="timeline-content right">
                <hr>
                <p class="timeline-content-date">23-Aug-17</p>
                <a href="<?php echo $link_results ?>">
                    <h5><strong>Heart scan</strong></h5>
                    <p>View report
                    </p>
                </a>
                <p><span class="summary-label">Pinderfields General Hospital</span></p>
                <hr>
            </div>
        </div>

        <div id="third" class="timeline-item" data-magellan-target="third">
            <div class="timeline-icon">
                <img src="img/hospital.svg" class="timeline-icon-new">
            </div>
            <div id="dec16" class="timeline-content" data-magellan-target="dec16">
                <hr>
                <p class="timeline-content-date">21-Dec-16</p>
                <a href="<?php echo $link_provider_hosp ?>#key-details">
                    <h5><strong>A&amp;E visit</strong></h5>
                    <p>Blood pressure abnormal (high)</p>
                    <p>Shortness of breath</p>
                </a>
                <p><span class="summary-label">Appointment with Dr. Livingstone</span></p>
                <hr>
            </div>
        </div>

        <div id="nov16" class="timeline-item" data-magellan-target="nov16">
            <div class="timeline-icon">
                <img src="img/ambulance.svg" class="timeline-icon-new">
            </div>
            <div class="timeline-content right">
                <hr>
                <p class="timeline-content-date">23-Nov-16</p>
                <a href="<?php echo $link_provider_hosp ?>#key-details">
                    <h5><strong>Ambulance dispatched</strong></h5>
                    <p>Treated at home</p>
                </a>
                <hr>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-icon">
                <img src="img/hospital.svg" class="timeline-icon-new">
            </div>
            <div class="timeline-content">
                <hr>
                <p class="timeline-content-date">21-Nov-16</p>
                <a href="<?php echo $link_provider_hosp ?>#key-details">
                    <h5><strong>A&amp;E visit</strong></h5>
                    <p>Blood pressure abnormal (high)</p>
                    <p>Shortness of breath</p>
                </a>
                <p><span class="summary-label">Appointment with Dr. Livingstone</span></p>
                <hr>
            </div>
        </div>

        <div id="may16" class="timeline-item" data-magellan-target="may16">
            <div class="timeline-icon">
                <img src="img/ambulance.svg" class="timeline-icon-new">
            </div>
            <div class="timeline-content right">
                <hr>
                <p class="timeline-content-date">23-May-16</p>
                <a href="<?php echo $link_provider_hosp ?>#key-details">
                    <h5><strong>Ambulance dispatched</strong></h5>
                    <p>Treated at home</p>
                </a>
                <hr>
            </div>
        </div>

    </div>

</div>
