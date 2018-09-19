<div id="third-column" class="cell medium-auto medium-cell-block-y content-column">


    <h2>Patient details <img src="img/Torso.svg" style="height: 24px;"></h2>

    <div id="name" class="cell" data-magellan-target="name">
        <br/>
        <h5>Name</h5>

        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="grid-x">
                    <div class="medium-6 small-12 large-3 cell">
                        <div class="panel-info-group cell">
                            <span class="panel-label">Usual name:</span><br/><span><?php echo $firstname ?> <?php echo $surname ?></span><br/><span class="panel-info-note">Effective since: <?php echo $dob ?></span>
                        </div>
                    </div>
                    <div class="medium-6 small-12 large-3 cell">
                        <div class="panel-info-group cell">
                            <span class="panel-label">Preferred name:</span><br/><span class="panel-info-none">Not recorded</span>
                        </div>
                    </div>
                    <div class="medium-6 small-12 large-3 cell">
                        <div class="panel-info-group cell">
                            <span class="panel-label">Other names:</span><br/><span class="panel-info-none">Not recorded</span>
                        </div>
                    </div>
                    <div class="medium-6 small-12 large-3 cell">
                        <div class="panel-info-group cell">
                            <span class="panel-label">Previous names:</span><br/><span class="panel-info-none">Not recorded</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell">
                <hr>
            </div>
        </div>
    </div>

    <div id="key-details" class="cell" data-magellan-target="key-details">
        <br/>
        <h5>Key details</h5>

        <div id="panel-key" class="grid-x">
            <div class="medium-6 large-3 cell">
                <div class="panel-info-group cell">
                    <span class="panel-label">Gender:</span><br/><span><?php echo $gender ?></span>
                </div>
            </div>
            <div class="medium-6 large-3 cell">
                <div class="panel-info-group cell">
                    <span class="panel-label">NHS Number:</span><br/><span>123 454 545</span>
                </div>
            </div>
            <div class="medium-6 large-3 cell">
                <div class="panel-info-group cell">
                    <span class="panel-label">Date of birth:</span><br/><span><?php echo $dob ?></span>
                </div>
            </div>
            <div class="medium-6 large-3 cell">
                <div class="panel-info-group cell">
                    <span class="panel-label">Place of birth:</span><br/><span>Stratford-Upon-Avon</span>
                </div>
            </div>
            <div class="cell">
                <hr>
            </div>
        </div>
    </div>

    <div id="address" class="cell" data-magellan-target="address">
        <br/>
        <h5>Address</h5>

        <div id="panel-address" class="grid-x">

            <div class="panel-info-group medium-6 large-3 cell">
                <span class="panel-label">Usual address:</span><br/><span>101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span><br/>
                <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/><br/>
            </div>
            <div class="panel-info-group medium-6 large-3 cell">
                <span class="panel-label">Temporary address:</span><br/>
                <span>101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span><br/>
                <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/>
            </div>
            <div class="panel-info-group medium-6 large-3 cell">
                <span class="panel-label">Temporary address:</span><br/>
                <span>101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span><br/>
                <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/>
            </div>

            <div id="address-history" class="medium-6 small-12 large-12 cell" style="display: none;">
                <div class="panel-info-group cell">
                    <span class="panel-label">Previous  address:</span><br/>
                    <span>101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span><br/>
                    <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/>
                </div>
            </div>
            <div class="cell">
                <hr>
            </div>
        </div>

    </div>

    <div id="contacts" class="cell" data-magellan-target="contacts">
        <br/>
        <h5>Contacts &amp; next of kin</h5>

        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                    <div class="cell marbot"><span class="summary-label">Name:</span><br/><span>Anne Hathaway</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Relationship:</span><br/><span>Mother</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Address:</span><br/><span><a target="_blank"  href="https://goo.gl/maps/eWABxM6Y8Ut">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</a></span><br/>
                    </div>
                    <div class="cell marbot"><span class="summary-label">Telephone:</span><br/><span>01234 567890</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Email: </span><br/><span>anne@thebard.com</span><br/></div>

                </div>
            </div>
            <div class="cell">
                <hr>
            </div>
            <div class="cell">
                <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                    <div class="cell marbot"><span class="summary-label">Name:</span><br/><span>Terry Shakespeare</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Relationship:</span><br/><span>Brother</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Address:</span><br/><span><a target="_blank"  href="https://goo.gl/maps/eWABxM6Y8Ut">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</a></span><br/>
                    </div>
                    <div class="cell marbot"><span class="summary-label">Telephone:</span><br/><span>01234 567890</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Email: </span><br/><span>tez@thebard.com</span><br/></div>

                </div>
            </div>
            <div class="cell">
                <hr>
            </div>
            <div class="cell">
                <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                    <div class="cell marbot"><span class="summary-label">Name:</span><br/><span>Terry Shakespeare</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Relationship:</span><br/><span>Brother</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Address:</span><br/><span><a target="_blank"  href="https://goo.gl/maps/eWABxM6Y8Ut">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</a></span><br/>
                    </div>
                    <div class="cell marbot"><span class="summary-label">Telephone:</span><br/><span>01234 567890</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Email: </span><br/><span>tez@thebard.com</span><br/></div>

                </div>
            </div>
            <div class="cell">
                <hr>
            </div>
            <div class="cell">
                <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                    <div class="cell marbot"><span class="summary-label">Name:</span><br/><span>Terry Shakespeare</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Relationship:</span><br/><span>Brother</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Address:</span><br/><span><a target="_blank"  href="https://goo.gl/maps/eWABxM6Y8Ut">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</a></span><br/>
                    </div>
                    <div class="cell marbot"><span class="summary-label">Telephone:</span><br/><span>01234 567890</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Email: </span><br/><span>tez@thebard.com</span><br/></div>

                </div>
            </div>
            <div class="cell">
                <hr>
            </div>
        </div>
    </div>

    <div id="poa" class="cell" data-magellan-target="poa">
        <br/>
        <h5>Power of Attorney</h5>

        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="grid-x  grid-margin-x small-up-2 medium-up-3 large-up-5">
                    <div class="cell marbot"><span class="summary-label">Name:</span><br/><span>Anne Hathaway</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Relationship:</span><br/><span>Mother</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Address:</span><br/><span><a target="_blank"  href="https://goo.gl/maps/eWABxM6Y8Ut">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</a></span><br/>
                    </div>
                    <div class="cell marbot"><span class="summary-label">Telephone:</span><br/><span>01234 567890</span><br/></div>
                    <div class="cell marbot"><span class="summary-label">Email: </span><br/><span>anne@thebard.com</span><br/></div>

                </div>
            </div>
        </div>
    </div>

</div>
