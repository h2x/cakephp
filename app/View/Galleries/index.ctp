

<h2>Gallery</h2>
<ul class="thumbnails">
    <?php foreach($gallery as $photo): ?>
        <div class="span2">
            <a data-toggle="lightbox" style="height: 110px" href="#lightbox<?php echo $photo['Gallery']['id'];?>" class="thumbnail">
                <?php echo $this->Html->image(FULL_BASE_URL.'/cakephp/'.$photo['Gallery']['thumb_path'],array('alt'=>''));?>
            </a>
        </div>

        <div id="lightbox<?php echo  $photo['Gallery']['id'];?>" class="lightbox hide fade" tabindex="-1" role='dialog' aria-hidden="true">
            <div class="lightbox-content">
                <?php echo $this->Html->image(FULL_BASE_URL.'/cakephp/'.$photo['Gallery']['file_path'],array('alt'=>''));?>
            </div>
        </div>

    <?php endforeach;?>
</ul>


<?php echo WWW_ROOT . 'gallery' . "/" ;?>