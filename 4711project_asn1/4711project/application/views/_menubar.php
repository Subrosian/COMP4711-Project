<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<span class="mynav">
    <ul class="nav">
        <!-- 
        Links below are different than in lab write up.
        They are using the URL Helper function site_url() to 
        call functions in the gallery controller.
        -->
        {menudata}
        <li><a href='/'>Home</a></li>
        <li><a href="<?php echo site_url('accommodations/all'); ?>">Accommodations</a></li>
        <li><a href="<?php echo site_url('restaurants/all'); ?>">Places to eat</a></li>
        <li><a href="<?php echo site_url('playplaces/all'); ?>">Places to have fun</a></li>
        <li><a href="<?php echo site_url('about'); ?>">About</a></li>
        {/menudata}
    </ul>
</span>