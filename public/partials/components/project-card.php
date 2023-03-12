<div class="project-card">
    <img src="<?php echo get_public_url('/images/') . $project->image; ?>" alt="Mentor Profile Picture">
    <div class="project-info">
        <h1><?php echo h($project->name); ?></h1>
        <p><?php echo h($project->author_name); ?></p>
        <ul class="d-flex">
            <?php 
                foreach ($project->tags as $tag) {
                    echo '<li>' . $tag . '</li>';
                }
            ?> 
        </ul>
    </div>
</div>