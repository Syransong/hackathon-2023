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
                <h1>Mentor List</h1>
                <p>List of all mentors</p>
            </section>
            <section>
                <?php foreach($mentors as $mentor): ?>
                    <?php include(get_project_path('public/partials/components/mentor-card.php')); ?>
                <?php endforeach; ?>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html> 