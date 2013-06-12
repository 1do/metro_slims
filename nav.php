	<nav class="md-nav md-nav-main">
        <ul>
            <li><a href="index.php" class="transition"><?php echo __('Home'); ?></a></li>
            <li><a href="index.php?p=libinfo" class="transition"><?php echo __('Library Information'); ?></a></li>
            <li><a href="index.php?p=help" class="transition"><?php echo __('Help on Search'); ?></a></li>
            <li><a href="index.php?p=member" class="transition"><?php echo __('Member Area'); ?></a></li>
            <li>
                <?php if($_COOKIE['admin_logged_in'] == 1){ ?>
                <a href="index.php?p=login">
                    <?php }else{ ?>
                <a id="libLogin">
                <?php } echo __('Librarian LOGIN'); ?></a></li>
        </ul>
    </nav>