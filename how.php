<?php
use PandemicPlates\Views\HowView;

require_once 'lib/site.inc.php';

$view = new HowView();
?>

<!DOCTYPE html>
<html lang="en">

    <?php echo $view->head('
        <link rel="stylesheet" type="text/css" href="css/how.css">
    '); ?>
    <?php echo $view->logo(); ?>
    <?php echo $view->navigation(); ?>
    <?php echo $view->dropdownNavigation(); ?>
    <?php echo $view->presentInstructions(); ?>

</html>
