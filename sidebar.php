<?php

/**
 * Sidebar - Post
 * 
 * @package NM_THEME
 */
?>

<aside id="secondary" class="widget-area">
    <?php
    // if (is_page() && is_active_sidebar('sidebar-cmd')) {
    //     dynamic_sidebar('sidebar-cmd');
    // } elseif (is_home() && is_active_sidebar('sidebar-main')) {
    //     dynamic_sidebar('sidebar-main');
    // } else {
    //     echo "<h1>Sidebar not active!</h1>";
    // }
    if (is_active_sidebar('sidebar-main')) {
        dynamic_sidebar('sidebar-cmd');
    } else {
        echo "<h1>Sidebar not active!</h1>";
    }

    ?>
</aside>