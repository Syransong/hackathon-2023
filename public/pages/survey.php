<?php
    require('../../src/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_path('public/partials/global/head.php'));  ?> 
    <body>
        <?php 
            require(get_path('public/partials/global/header.php'));
        ?>
        <main class="grid grid-row">
            <?php
                require(get_path('public/partials/components/side-nav.php'));
            ?>
            <section class="profile-content survey">
                <section>
                    <h1>Let's learn more about you.</h1>
                    <p>Take our survey and we'll help you find a compatible mentor near you.</p>
                </section>
                <section class="survey-form">
                    <div class="tab main-obj">
                        <!-- <p>Step 1 of 3</p> -->
                        <h2>What's your main objective right now?</h2>
                        <input oninput="this.className = ''" id="get-hired" type="radio" name="main-obj">
                        <label for="get-hired">Get Hired</label>
                        <input oninput="this.className = ''" id="upskill" type="radio" name="main-obj">
                        <label for="upskill">Upskilling and Growth</label>
                        <input oninput="this.className = ''" id="network" type="radio" name="main-obj">
                        <label for="network">Networking</label>
                        <input oninput="this.className = ''" id="transition" type="radio" name="main-obj">
                        <label for="transition">Career Transitioning</label>
                        <input oninput="this.className = ''" id="not-sure" type="radio" name="main-obj">
                        <label for="not-sure">Not Sure</label>
                    </div>
                    <div class="tab">
                        <!-- <p>Step 2 of 3</p> -->
                        <h2>Which topics are you interested in?</h2>
                            <input type="checkbox" id="front-end" value="Front-end Development">
                            <label for="front-end">Front-End Development</label>
                            <input type="checkbox" id="back-end" value="Back-end Development">
                            <label for="back-end">Back-End Development</label>
                            <input type="checkbox" id="full-stack" value="Full-Stack Development">
                            <label for="full-stack">Full-Stack Development</label>
                            <input type="checkbox" id="graphic-design" value="Graphic Design">
                            <label for="graphic-design">Graphic Design</label>
                            <input type="checkbox" id="ui-design" value="UI Design">
                            <label for="ui-design">UI Design</label>
                            <input type="checkbox" id="ux-design" value="UX Design">
                            <label for="ux-design">UX Design</label>
                            <input type="checkbox" id="pm" value="pm">
                            <label for="pm">Project Management</label>
                    </div>
                    <div class="tab">
                        <!-- <p>Step 3 of 3</p> -->
                        <h2>Where are you located?</h2>
                        <input type="text" placeholder="Search...">
                    </div>
                    <div class="btn">
                        <a href="<?php echo get_public_url('/pages/results.php'); ?>" >Finish</a>
                    </div>
                </section>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>