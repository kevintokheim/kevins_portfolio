<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div class = "container">

    <div id = "header">

    </div>

        <div id = "wrapper">

            <div id = "content">
                <?php print render($page['content']); ?>
            </div>

            <?php if ($page['sidebar_first']); ?>
                <div id = "sidebar">
                    <?php print render($page['sidebar_first']); ?>
                </div>
            <?php endif; ?>
        </div>

        <div id = "footer">
            <?php if ($page['footer']); ?>
                <?php print render($page['footer']); ?>
            <?php endif; ?>

</div>










fdsadfsadsfa
