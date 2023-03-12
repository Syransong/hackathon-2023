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
        <main>
            <section>
                <h1>Project Showcase</h1>
            </section>
            <section>
                <div class="all-projects">
                    <?php foreach($projects as $project): ?>
                        <?php include(get_path('public/partials/components/project-card.php')); ?>
                    <?php endforeach; ?>
                </div>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>