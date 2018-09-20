<?php include("include-concept-omni-head.php"); ?>

<?php include("variables-concept-omni.php"); ?>

<style>
    #vert-tab-2 {
        background: #F2F3F4;
        font-weight: bold;
    }

    #col-2-link-1 {
        font-weight: bold;
    }

</style>

<body>

    <?php include("include-concept-b-scrolltotop.php"); ?>

    <div class="grid-y medium-grid-frame">
        <div class="cell shrink header medium-cell-block-container">

            <!-- Masthead -->
            <?php include("include-concept-omni-masthead.php"); ?>

            <!-- Patient summary-->
            <?php include("include-concept-omni-patient-summary.php"); ?>

            <!-- Content -->
            <div class="cell medium-auto medium-cell-block-container">

                <div class="grid-x grid-padding-x">

                    <!-- Vertical tabs icon -->
                    <?php include("include-concept-omni-column-1-clinical.php"); ?>

                    <!-- Menu -->
                    <?php include("include-concept-omni-column-2-clinical.php"); ?>

                    <!-- Main content -->
                    <?php include("include-concept-omni-column-3-clinical.php"); ?>

                    <!-- Info bar -->
                    <?php include("include-concept-omni-column-4.php"); ?>

                </div>

            </div>


            <!-- Footer -->
            <?php include("include-concept-omni-footer.php"); ?>

        </div>
    </div>


    <?php include("include-concept-a-javascripts.php"); ?>

</body>

</html>
