<div class="mentor-card">
    <img src="<?php echo get_public_url('/images/') . $mentor->image_url; ?>" alt="Mentor Profile Picture">
    <div class="mentor-info">
        <ul class="d-flex">
            <?php 
                foreach ($mentor->specialization as $tag) {
                    echo '<li>' . $tag . '</li>';
                }
            ?> 
        </ul>
        <h2><?php echo h($mentor->name); ?></h2>
        <p><?php echo h($mentor->job_title); ?></p>
        <p><?php echo h($mentor->user_bio); ?></p>
    </div>
</div>