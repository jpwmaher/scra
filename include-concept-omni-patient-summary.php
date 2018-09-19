<div id="patient-summary" class="grid-x grid-padding-x">
    <div class="cell">
        <div class="grid-x grid-padding-x">
            <div id="summary-name" class="large-shrink medium-shrink cell summary-panel">
                <div class="grid-x">

                    <div class="auto cell">
                        <span class="summary-label">Full name:</span><br/><span class="summary-info"><?php echo $firstname ?> <?php echo $surname ?></span>
                    </div>
                </div>
            </div>
            <div class="large-shrink medium-shrink small-6 cell summary-panel">
                <span class="summary-label">Gender:</span><br/><span class="summary-info"><?php echo $gender ?></span>

            </div>
            <div class="large-shrink medium-shrink small-6 cell summary-panel">
                <span class="summary-label summary-info-gender-age">DOB:</span><br/><span class="summary-info"><?php echo $dob ?></span>
            </div>
            <div class="large-shrink medium-shrink small-6 cell summary-panel">
                <span class="summary-label">NHS No:</span><br/><span class="summary-info">123 456 7890</span>

            </div>
            <div id="summary-address" class="large-shrink medium-auto small-6 cell summary-panel">
                <span class="summary-label">Address:</span><br/>
                <span class="summary-info">101 Other Street, Stratford-upon-Avon, Warwickshire, AB12 3DE</span>
            </div>
        </div>
    </div>
</div>
