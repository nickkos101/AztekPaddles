<?php /* Template Name: Fit Configurator */ ?>
<?php get_header(); ?>
<main>
    <div class="gray-wrap radial col-wrap">
        <div class="mini-container">
            <div class="fit-config">
                <?php include 'configurator/login.php'; ?>
                <?php include 'configurator/body-dimensions.php'; ?>
                <?php include 'configurator/hand-size.php'; ?>
                <?php include 'configurator/intended-use.php'; ?>
                <?php include 'configurator/board-thickness.php'; ?>
                <?php include 'configurator/skill-level.php'; ?>
               <!-- <?php include 'configurator/current-setup.php'; ?>
                <?php include 'configurator/more-info.php'; ?> -->
            </div>
        </div>
        <?php include 'configurator/results.php'; ?>
        <div class="mini-container">
            <div class="ui-bar">
                <div class="four-fifths column">
                    <div class="progress-bar">
                        <div class="current"><span class="toolTip">Body Dimensions</span></div>
                        <div><span class="toolTip">Hand Size</span></div>
                        <div><span class="toolTip">Intended Use</span></div>
                        <div><span class="toolTip">Board Thickness</span></div>
                        <div><span class="toolTip">Skill &amp; Style</span></div>
                        <div><span class="toolTip"></span></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="column fifth taligncenter">
                    <button>Continue <i class="fa fa-angle-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<?php get_footer(); ?>