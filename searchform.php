<div class="header-top-search">
    <form action="<?php echo home_url('/');?>" method="get">
        <input type="search" name="s" value="<?php get_search_query();?>" placeholder="<?php echo esc_attr_x(' Search...', 'placeholder', 'carnews');?>">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>