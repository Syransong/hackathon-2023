<div class="mentor-card">
    <img src="" alt="">
    <div class="mentor-info">
        <p>Title</p>
        <ul class="d-flex">
            <?php 
                foreach ($mentor->tags as $tag) {
                    echo '<li>' . $tag . '</li>';
                }
            ?> 
        </ul>
        <h1><?php echo h($mentor->name); ?></h1>
        <p><?php echo h($mentor->job_title); ?></p>
        <p><?php echo h($mentor->user_bio); ?></p>
    </div>
</div>