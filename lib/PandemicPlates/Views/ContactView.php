<?php
namespace PandemicPlates\Views;

use PandemicPlates\Objects\User;

/**
 *  This class will handle the contact page
 */
class ContactView extends View
{

    function __construct()
    {
        $this->setTitle("Contact PandemicPlates!");

        $this->addLink("index.php", "Home");
        $this->addLink("how.php", "How To Make");
        $this->addLink("contact.php", "Contact", true);

    }

    public function presentContactInfo() {
        return <<< HTML
        <div id="contactWidget" class="widget">
            <div class="contactRow">
                <div class="contactLabel">Please address all concerns to:</div>
                <div class="contactEmail">pandemicplate@gmail.com</div>
            </div>
        </div>
        <!-- <div id="icons" class="contactRow">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik"> Freepik </a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></div> -->

        <script src="js/externalFunctions.js"></script>
HTML;
    }
}
