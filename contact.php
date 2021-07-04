<?php
use PandemicPlates\Views\ContactView;

require_once 'lib/site.inc.php';

$view = new ContactView();
?>

<!DOCTYPE html>
<html lang="en">

    <?php echo $view->head('
        <link rel="stylesheet" type="text/css" href="css/contact.css">
    '); ?>
    <?php echo $view->logo(); ?>
    <?php echo $view->navigation(); ?>
    <?php echo $view->dropdownNavigation(); ?>
    <?php echo $view->presentContactInfo(); ?>

</html>
