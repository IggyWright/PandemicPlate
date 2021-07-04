<?php
/**
 * Function to localize our site
 * @param $site The Site object
 */
return function(PandemicPlates\Objects\Site $site) {
    // Set the time zone
    date_default_timezone_set('America/Detroit');
};
