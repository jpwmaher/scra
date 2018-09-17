<?php include("include-search-a-head.php"); ?>

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0;
        /* <-- Apparently some margin are still there even though it's hidden */
    }

    ::-webkit-credentials-auto-fill-button {
        visibility: hidden;
    }

    .primary-fade {
        background: rgba(206, 231, 255, 0.6);
    }

</style>

<body>

    <!-- Masthead -->
    <?php include("include-search-a-masthead.php"); ?>

    <!-- H1 -->
    <?php include("include-search-a-h1.php"); ?>

    <!-- Tabs -->
    <div id="tab-wrapper" class="grid-container">
        <div id="tabbies" class="grid-x" data-equalizer>
            <div class="large-4 medium-4 small-6 cell">
                <a id="tab-1" href="search-a-nhs.php" class="button tabby tabby-inactive" data-equalizer-watch>By NHS number</a>
            </div>
            <div class="large-4 medium-4 small-6 cell">
                <a id="tab-2" href="search-a-patient-details.php" class="button button tabby tabby-active" style="width: 100%;" data-equalizer-watch>By patient details</a>
            </div>
            <div class="large-4 medium-4 small-6 cell">
                <a href="#" class="button tabby tabby-no-tab show-for-medium" style="width: 100%;" data-equalizer-watch></a>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div id="content-wrapper" class="grid-container">
        <br/>
        <div class="grid-x grid-padding-x">

            <div id="main-form" class="large-6 medium-8 cell">
                <form data-abide novalidate action="https://scra-prototypes.herokuapp.com/403-prototype-a-spinny-multiple.html" method="get" autocomplete="off">
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                    </div>

                    <div class="grid-x grid-padding-x">
                        <div class="cell">
                            Enter any information you know about the patient<br/><br/>
                        </div>
                    </div>

                    <div class="grid-x grid-padding-x">
                        <div class="cell form-bg">
                            <div class="cell form-wrap callout primary-fade">
                                <h4>Gender</h4>
                                <!--  <div id="mandatory" class="cell"><span style="color: red;">*</span> Denotes required field</div> -->
                                <fieldset class="cell">
                                    <label class="main-label"><!-- <span style="color: red;">*</span>  --></label>
                                    <input type="radio" name="gender" value="Red" id="Male"><label for="Male" style="font-weight: normal;">Male</label>
                                    <input type="radio" name="gender" value="Blue" id="Female"><label for="Female" style="font-weight: normal;">Female</label>
                                    <input type="radio" name="gender" value="Green" id="Notknown"><label for="Notknown" style="font-weight: normal;">Not known</label>
                                    <input type="radio" name="gender" value="Orange" id="Notspec"><label for="Notspec" style="font-weight: normal;">Not specified</label>
                                </fieldset>
                            </div>

                            <div class="cell form-wrap callout primary-fade">
                                <h4>Name</h4>
                                <label class="main-label">First name
                                      <input type="text" placeholder="First name" value="">
                                    </label>

                                <label class="main-label">Surname <!-- <span style="color: red;">*</span> -->
                                      <input type="text" placeholder="Surname" value="" data-toggle-focus="form-callout">
                                    </label>

                                <fieldset class="large-6 cell">
                                    <legend>Include the following in the results:</legend>
                                    <input id="checkbox1" type="checkbox"><label for="checkbox1" style="font-weight: normal;"><span data-tooltip tabindex="1" title="This will return results for common misspellings such as McDonald/MacDonald. Checking this box could significantly increase search time.">Misspellings/similar</span></label>
                                    <input id="checkbox2" type="checkbox"><label for="checkbox2" style="font-weight: normal;"><span data-tooltip tabindex="1" title="This will search Spine for any known aliases. Checking this box could significantly increase search time.">Aliases</span></label>
                                    <input id="checkbox3" type="checkbox"><label for="checkbox3" style="font-weight: normal;"><span data-tooltip tabindex="1" title="This will return results for both John Smith & Smith John. Checking this box could significantly increase search time.">Name reversal</span></label>
                                </fieldset>
                            </div>

                            <div class="cell form-wrap callout primary-fade">
                                <h4>Date of birth</h4>
                                <div id="div1" class="cell">
                                    <fieldset>
                                        <legend class="form-label error-label">
                                            <label class="main-label"></label>
                                        </legend>
                                        <span class="form-label__hint">For example, '05 07 1948'</span>
                                        <div class="grid-x grid-padding-x">
                                            <div class="large-2 medium-2 small-3 cell">
                                                <label for="dob-day-input">Day</label>
                                                <input autocomplete="off" type="number" id="dob-day-input" name="dob-day" value="" class="day form-control" maxlength="2" pattern="[0-9]*">
                                            </div>
                                            <div class="large-2 medium-2 small-3 cell">
                                                <label for="dob-month-input">Month</label>
                                                <input autocomplete="off" type="number" id="dob-month-input" name="dob-month" value="" class="month form-control" maxlength="2" pattern="[0-9]*">
                                            </div>
                                            <div class="large-3 medium-4 small-4 cell">
                                                <label for="dob-year-input">Year</label>
                                                <input autocomplete="off" type="number" id="dob-year-input" name="dob-year" value="" class="year form-control" maxlength="4" pattern="[0-9]*">

                                            </div>
                                            <div class="large-6 small-12 cell">
                                                <label for="dob-year-input">&nbsp;</label>
                                                <a id="link1" href="#div2">or search by date range</a>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div id="div2" class="cell" style="display: none;">
                                    <fieldset>
                                        <legend class="form-label error-label">
                                            <label class="main-label"></label>
                                        </legend>
                                        <span class="form-label__hint">Date of birth from:</span>
                                        <div class="grid-x grid-padding-x">
                                            <div class="large-2 medium-2 small-3 cell">
                                                <label for="dob-day-input">Day</label>
                                                <input autocomplete="off" type="number" id="dob-day-input" name="dob-day" value="" class="day form-control" maxlength="2" pattern="[0-9]*">
                                            </div>
                                            <div class="large-2 medium-2 small-3 cell">
                                                <label for="dob-month-input">Month</label>
                                                <input autocomplete="off" type="number" id="dob-month-input" name="dob-month" value="" class="month form-control" maxlength="2" pattern="[0-9]*">
                                            </div>
                                            <div class="large-3 medium-4 small-4 cell">
                                                <label for="dob-year-input">Year</label>
                                                <input autocomplete="off" type="number" id="dob-year-input" name="dob-year" value="" class="year form-control" maxlength="4" pattern="[0-9]*">

                                            </div>
                                        </div>
                                        <span class="form-label__hint">Date of birth to:</span>
                                        <div class="grid-x grid-padding-x">
                                            <div class="large-2 medium-2 small-3 cell">
                                                <label for="dob-day-input">Day</label>
                                                <input autocomplete="off" type="number" id="dob-day-input" name="dob-day" value="" class="day form-control" maxlength="2" pattern="[0-9]*">
                                            </div>
                                            <div class="large-2 medium-2 small-3 cell">
                                                <label for="dob-month-input">Month</label>
                                                <input autocomplete="off" type="number" id="dob-month-input" name="dob-month" value="" class="month form-control" maxlength="2" pattern="[0-9]*">
                                            </div>
                                            <div class="large-3 medium-4 small-4 cell">
                                                <label for="dob-year-input">Year</label>
                                                <input autocomplete="off" type="number" id="dob-year-input" name="dob-year" value="" class="year form-control" maxlength="4" pattern="[0-9]*">

                                            </div>
                                            <div class="large-12 small-12 cell">
                                                <label for="dob-year-input">&nbsp;</label>
                                                <a id="link2" href="#div1">or search by specific date</a>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>



                            <div class="cell form-wrap callout primary-fade">
                                <h4>Address</h4>
                                <div class="grid-x grid-padding-x">
                                    <div class="large-6 medium-6 small-6 cell">
                                        <label for="dob-year-input">Postcode</label>
                                        <input autocomplete="off" type="text" maxlength="7">

                                    </div>
                                    <div class="auto cell">
                                        <label for="dob-year-input">&nbsp;</label>
                                        <a href="#">Address &amp; postcode lookup</a>
                                    </div>
                                </div>
                                <!--     <div class="large-3 medium-4 small-4 cell">
                                    <label class="main-label">Postcode
                                    <div class="grid-x grid-padding-x">
                                        <div class="large-4 medium-4 small-7 cell"><input type="text" placeholder="Postcode"></div>
                     
                                        </div>
                                    </label>
                                </div>
                                <div class="auto cell">
                                    <label for="dob-year-input">&nbsp;</label>
                                    <a href="#">or search by date range</a>
                                </div> -->
                            </div>

                            <div class="cell form-wrap callout primary-fade">
                                <h4>Contact details</h4>
                                <label class="main-label">Mobile number
                                    <div class="grid-x grid-padding-x">
                                        <div class="large-6 medium-6 small-7 cell"><input type="number" placeholder="Mobile" pattern="[0-9]*"></div>                       
                                        </div>
                                    </label>
                                <label class="main-label">Email address
                                    <div class="grid-x grid-padding-x">
                                        <div class="large-6 medium-6 small-7 cell"><input type="email" placeholder="Email"></div>                        
                                        </div>
                                    </label>
                            </div>

                        </div>

                        <div class="cell  form-wrap"><br/>
                            <fieldset class="large-6 columns">
                                <button class="button" type="submit" value="Submit">Find patient</button>
                                <button class="button hollow" type="reset" value="Reset">Clear</button>
                            </fieldset>
                        </div>
                    </div>

                </form>
            </div>

            <div class="large-6 medium-4 cell" data-sticky-container>
                <div class="sticky" data-sticky data-top-anchor="main-form:top" data-btm-anchor="main-form:bottom">
                    <div class="warning callout is-hidden" id="form-callout" data-toggler="is-hidden">
                        <p>This is only visible when the above field has focus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Help -->
    <div id="privacy" class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-6 medium-6 cell">
                <div class="callout ">
                    <h6>Tips on finding a patient using patient search</h6>
                    <ul>
                        <li><a href="#">General search tips</a></li>
                        <li><a href="#">Name tips</a></li>
                        <li><a href="#">Date tips</a></li>
                        <li><a href="#">Address finder tips</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php include("include-search-a-foot.php"); ?>
