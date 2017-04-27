  <div class="row">
    <ul class="pager solution-pager col-xs-12">
      <?php $next_post = get_next_post(); if($next_post) { $next_title = strip_tags(str_replace('"', '', $next_post->post_title)); ?>
        <li class="previous solution-prev">
          <a href="<?php echo get_permalink($next_post->ID); ?>">
            <div class="arrow-left"></div>
            <div class="arrow-artical-left hidden-xs"><?php echo $next_title; ?>
              <br><span>Предыдущий материал</span></div>
          </a>
        </li>
      <?php } ?>
      <?php $prev_post = get_previous_post(); if($prev_post) { $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title)); ?>
        <li class="next next solution-next ">
          <a href="<?php echo get_permalink($prev_post->ID); ?>">
            <div class="arrow-artical-right hidden-xs"> <?php echo $prev_title; ?>
              <br><span>Следующий материал</span></div>
            <div class="arrow-right"></div>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div>
