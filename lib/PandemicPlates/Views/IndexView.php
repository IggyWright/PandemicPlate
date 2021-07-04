<?php
namespace PandemicPlates\Views;

use PandemicPlates\Objects\User;

class IndexView extends View{
    public function __construct() {
        $this->setTitle("PandemicPlate!");

        $this->addLink("index.php", "Home", true);
        $this->addLink("how.php", "How To Make");
        $this->addLink("contact.php", "Contact");

    }

    public function presentHomepage() {
        $html = <<< HTML
            <div id="introWidget" class="widget">
                <div id="simpleIntro">
                    Create heavy duty 45lbs Olympic size weight plates for ~$40
                </div>
                <div id="intro">
                    <div id="introText">
                        During the 2020 pandemic the popularity of at home gyms exploded
                        which made it very difficult to find weight plates. The goal of
                        PandemicPlate was to make high quality, rubber-coated weight
                        plates at home using materials that can be found at any hardware
                        store along with ordered online.
                    </div>
                    <a id="tutorialsButton" href="/how.php">Check Out Tutorial</a>
                </div>
            </div>

            <script src="js/externalFunctions.js"></script>
HTML;

        return $html;
    }
}
