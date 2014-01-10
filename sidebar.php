<div id="side">
  <div id="side-inner">
    <h3 class="post-title">Category Archives</h3>

    <ul class="arch-list clearfix">
      <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>

    <h3 class="post-title">Monthly Archives</h3>
    <ul class="arch-list clearfix">
      <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
    </ul>
  </div>
</div>