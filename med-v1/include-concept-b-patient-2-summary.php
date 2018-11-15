<div class="cell">
    <div id="patient-summary" class="grid-x grid-padding-x">
        <div class="cell">
            <div class="grid-x grid-padding-x">
                <div id="summary-name" class="large-6 medium-4 cell summary-panel">
                    <div class="grid-x">

                        <div class="auto cell">
                            <span class="summary-label">Full name:</span><br/><span class="summary-info summary-info-name"><?php echo $firstname ?> <?php echo $surname ?></span><br/>
                            <span class="summary-info summary-info-gender-age" style="padding-top: 100px !important;"><?php echo $gender ?> <span style="color: lightgray">|</span> 47 years old</span>
                        </div>
                    </div>
                </div>
                <div class="large-2 medium-3 small-6 cell summary-panel">
                    <span class="summary-label">NHS No:</span><br/><span class="summary-info">123 456 7890</span><br/><br/>
                    <span class="summary-label summary-info-gender-age">DOB:</span><br/><span class="summary-info"><?php echo $dob ?></span>
                </div>
                <div id="summary-address" class="large-2 medium-3 small-6 cell summary-panel">
                    <span class="summary-label">Address:</span><br/><span class="summary-info">                        <?php include("include-concept-b-address.php"); ?></span>
                </div>
                <div id="summary-address" class="large-2 medium-2 small-12 cell summary-panel">
                    <!-- <div class="grid-x grid-margin-x small-up-5 medium-up-1 large-up-1">
                        <div class="cell lozenge-wrap"> <span class="alert alert-lozenge">CCA</span></div>
                        <div class="cell lozenge-wrap"> <span class="alert alert-lozenge">Violent</span></div>
                        <div class="cell lozenge-wrap"><span class="flag-panel summary-lozenge">RA</span></div>
                        <div class="cell lozenge-wrap"><span class="flag-panel summary-lozenge">MHCP</span></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
