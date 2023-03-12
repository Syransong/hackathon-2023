<div class="project-card">
    <img src="<?php echo get_public_url('/images/') . $project->image; ?>" alt="Mentor Profile Picture">
    <div class="mentor-info">
        <ul class="d-flex">
            <?php 
                foreach ($project->tags as $tag) {
                    echo '<li>' . $tag . '</li>';
                }
            ?> 
        </ul>
        <h2><?php echo h($project->name); ?></h2>
        <p><?php echo h($project->author_name); ?></p>
    </div>
</div>