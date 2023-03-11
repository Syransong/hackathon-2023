<div class="project-card">
    <img src="" alt="">
    <div class="project-info">
        <p>Title</p>
        <ul class="d-flex">
            <?php 
                foreach ($project->tags as $tag) {
                    echo '<li>' . $tag . '</li>';
                }
            ?> 
        </ul>
        <h1><?php echo h($project->name); ?></h1>
        <p><?php echo h($project->description); ?></p>
        <a href="<?php echo get_public_url('projects/') . $project->project_url; ?>">View Project &rarr;</a>
    </div>
</div>