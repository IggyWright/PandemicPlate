<?php
namespace PandemicPlates\Views;

use PandemicPlates\Objects\User;

/**
 * This will handle the How To page
 */
class HowView extends View
{

    function __construct()
    {
        $this->setTitle("How To Make PandemicPlate!");

        $this->addLink("index.php", "Home");
        $this->addLink("how.php", "How To Make", true);
        $this->addLink("contact.php", "Contact");

    }

    function presentInstructions() {
        $html = <<<HTML
            <div id="instructionWidget" class="widget">
                <div id="tableOfContent">
                    <div id="tocTitle">Table of Content:</div>
                    <ol>
                        <li class="firstLevelItem">
                            <a href="#step1">Build Mold Frames and Molds</a>
                        </li>
                        <ol>
                            <li class="secondLevelItem">
                                <a href="#step1A">Create Cement Mold</a>
                            </li>
                            <ol>
                                <li class="thirdLevelItem">
                                    <a href="#step1Aa">Build Cement Mold Frame</a>
                                </li>
                                <li class="thirdLevelItem">
                                    <a href="#step1Ab">Create Mold Using Sand Casting (Cheaper but More Time Consuming)</a>
                                </li>
                                <li class="thirdLevelItem">
                                    <a href="#step1Ac">Create Mold Using Rubber (More Expensive but Easier)</a>
                                </li>
                            </ol>
                            <li class="secondLevelItem">
                                <a href="#step1B">Create Urethane Coating Mold</a>
                            </li>
                            <ol>
                                <li class="thirdLevelItem">
                                    <a href="#step1Ba">Build Urethane Mold Frame (Same As Step 1.A.a Above but Different Dimensions)</a>
                                </li>
                                <li class="thirdLevelItem">
                                    <a href="#step1Bb">Create Mold Using Rubber (Same As Step 1.A.c Above but Different Dimensions)</a>
                                </li>
                            </ol>
                        </ol>
                        <li class="firstLevelItem">
                            <a href="#step2">Create Inner Cement Weight</a>
                        </li>
                        <li class="firstLevelItem">
                            <a href="#step3">Add Urethane Coating and Steel Ring</a>
                        </li>
                    </ol>
                </div>

                <div class="instructionsBanner" id="step1">
                    1.) Build Frames and Molds
                </div>
                <div class="instructionsSubBanner" id="step1A">
                    A.) Create Cement Casting Mold
                </div>
HTML;

    $html .= $this->createInstructionStep(
        "step1Aa",
        "a",
        "Build Cement Mold Frame",
        [
            ["Glue together 3D printed cement mold models", "The glue used was SciGrip 16 acrylic cement"],
            ["Cover entire part using epoxy to create solid, gapless piece", "The epoxy used was XTC-3D, a specialty epoxy for covering 3D printed parts"],
            ["Add a plug to the pipe by securing a paper circle inside the pipe and pouring epoxy", "Secure the paper using simple scotch tape", "The reason we do this step is to give depth to the center column making it easier when we pour the material"],
            ["Secure the 3D printed part into the base board", "The base board used is 21.75 in. x 21.75 in. x 1 in.", "The hole drilled in the center of the base is 2.5 in.", "Secure the part to the board using E6000 adhesive"],
            ["Create a frame using 4 20.25 x 2 x 4 in. pieces of wood", "Connect together through butt joints with 2 in. wood screws"],
            ["Cut 4 6.63 x 3.5 x 0.25 in. pieces of wood to place in the corners of the frames", "This is done to reduce the space used by the mold", "Secure each piece, diagonally, 4.6875 in. away from the inner corners.", "Attach using wood glue and clamping for 24 hours"],
            ["Attach the walls to the base board using 2 in. wood screws"]
        ],
        '/img/how/1-A-a/resized/'
    );

    $html .= $this->createInstructionStep(
        "step1Ab",
        "b",
        "Create Mold Using Sand Casting (Cheaper but More Time Consuming)",
        [
            [
                "Create at-home casting sand using a concoction of 12.5% clay and 87.5% fine sand",
                "Total cast volume is ~586.88in^3 which equates to ~9.62liters",
                "Clay: 73.36in^3 = 1.27 quarts",
                "Sand: 513.52in^3 = 8.89 quarts",
                "Roughly 3 bottles of water were mixed in",
                "The clay was collected by crushing and sifting UNSCENTED kitty litter (pure clay)",
                "The sand used was ultra fine aquarium sand because it is much finer than other sands",
                "A tutorial can be found (here) for more info"
            ],
            [
                "Apply a VERY healthy amount of baby powder to the mold to act as a release agent"
            ],
            [
                "Pour the casting sand into the frame",
                "Make sure you are using a blunt object to compact the sand as you load it in",

            ],
            [
                "Add a second 21.75 in. x 21.75 in. base to completely enclose the frame and mold"
            ],
            [
                "(HARDEST PART)Flip the entire frame over, remove the screws securing the base to the walls, carefully pry the mold out of the sand",
                "It may help to hit the frame with a mallet to help knock the sand off the mold"
            ],
            [
              "Fix any dents or knicks in the walls with more sand and a firm card for shaping",
              "A credit card or putty knife worked best for shaping the walls"
            ]
        ],
        '/img/how/1-A-b/resized/'
    );

    $html .= $this->createInstructionStep(
        "step1Ac",
        "c",
        "Create Mold Using Rubber (More Expensive but Easier)",
        [
            [
                "Using silicon caulking, apply a small amount between every crevice of the frame as well as where the mold meets the base board",
                "Caulking used was GE Advanced Silicone 2",
                "Use a credit card or putty knife to smooth edges"
            ],
            [
                "Apply an acrylic paint to the wooden parts",
                "Krylon Crystal Clear Acrylic spray paint was used",
                "An additional layer of Table Top Epoxy was added to the wooden areas"
            ],
            [
                "Apply a very thick layer of mold release over the now acrylic mold frame",
                "Used was Universal Mold Release"
            ],
            [
                "Pour equal Part A to Part B of liquid rubber, mix thoroughly",
                "The rubber mix chosen was Smooth-On Vytaflex 30",
                "Total volume of the base when using rubber will be ~377.7in^3 = 1.635 ~1.7 gallons to give half inch bottom to the mold",
                "Part A: 0.85 gallons = 3.218 liters",
                "Part B: 0.85 gallons = 3.218 liters",
                "Paddle mixer was used to mix properly"
            ],
            [
                "Pour liquid rubber mix into the mold frame"
            ],
            [
                "Allow to cure for 16-24 hours"
            ],
            [
                "Remove the mold by sliding a screw driver down a corner and slowly prying out",
                "This part was very difficult and may be better off disassembling the frame"
            ]
        ],
        '/img/how/1-A-c/resized/'
    );

    $html .= <<<HTML
        <div class="instructionsSubBanner" id="step1B">
            B.) Create Urethane Coating Casting Mold
        </div>
HTML;

    $html .= $this->createInstructionStep(
        "step1Ba",
        "a",
        "Build Mold Frame (Same As Step 1.A.a Above but Different Dimensions)",
        [
            ["Glue together 3D printed cement mold models", "The glue used was SciGrip 16 acrylic cement"],
            ["Cover entire part using epoxy to create solid, gapless piece", "The epoxy used was XTC-3D, a specialty epoxy for covering 3D printed parts"],
            ["Add a plug to the pipe by securing a paper circle inside the pipe and pouring epoxy", "Secure the paper using simple scotch tape", "The reason we do this step is to give depth to the center column making it easier when we pour the material"],
            ["Secure the 3D printed part into the base board", "The base board used is 22 in. x 22 in. x 1 in.", "The hole drilled in the center of the base is 3.5 in.", "Secure the part to the board using E6000 adhesive"],
            ["Create a frame using 4 20.5 x 2 x 4 in. pieces of wood", "Connect together through butt joints with 2 in. wood screws"],
            ["Cut 4 7.56 x 3.5 x 0.25 in. pieces of wood to place in the corners of the frames", "This is done to reduce the space used by the mold", "Secure each piece, diagonally, 5.34375 in. away from the inner corners.", "Attach using wood glue and clamping for 24 hours"],
            ["Attach the walls to the base board using 2 in. wood screws"]
        ],
        '/img/how/1-B-a/resized/'
    );

    $html .= $this->createInstructionStep(
        "step1Bb",
        "b",
        "Create Mold Using Rubber (Same As Step 1.A.c Above but Different Dimensions)",
        [
            [
                "Using silicon caulking, apply a small amount between every crevice of the frame as well as where the mold meets the base board",
                "Caulking used was GE Advanced Silicone 2",
                "Use a credit card or putty knife to smooth edges"
            ],
            [
                "Apply an acrylic paint to the wooden parts",
                "Krylon Crystal Clear Acrylic spray paint was used",
                "An additional layer of Table Top Epoxy was added to the wooden areas"
            ],
            [
                "Apply a very thick layer of mold release over the now acrylic mold frame",
                "Used was Universal Mold Release"
            ],
            [
                "Pour 10 Part A to 1 Part B of liquid rubber by volume, mix thoroughly",
                "The rubber mix chosen was Smooth-On Mold Max 14NV",
                "Total volume of the base when using rubber will be ~351.in^3 = 1.52 ~1.6 gallons to give half inch bottom to the mold",
                "Part A: 1.44 gallons = 5.45 liters",
                "Part B: 0.12 gallons = 0.45 liters",
                "Paddle mixer was used to mix properly"
            ],
            [
                "Pour liquid rubber mix into the mold frame"
            ],
            [
                "Allow to cure for 16-24 hours"
            ],
            [
                "Remove the mold by sliding a screw driver down a corner and slowly prying out",
                "This part was very difficult and may be better off disassembling the frame"
            ]
        ],
        '/img/how/1-B-b/resized/'
    );

    $html .= <<<HTML
        <div class="instructionsBanner" id="step2">
            2.) Create Inner Cement Weight
        </div>
HTML;

    $html .= $this->createInstructionStep(
        "step2",
        "2",
        "Create Cement Weight",
        [
            ["Mix up roughly 3 gallons of cement", "Cement used was Quickrete Fast Setting mix"],
            ["Add a layer of release spray to the mold from Step 1.A.c or directly into the sand mold"],
            ["Pour cement into the mold until halfway filled", "For 45 lbs fill the entire 2.32 in. mold", "For 25 lbs fill the mold to 1.22 in. height", "For 10 lbs fill the mold to 0.39 in. height"],
            ["Add a 16 in. diameter rebar ring and a 6 in. diameter rebar ring", "Rebar rings can be purchased from online suppliers", "Rebar rings may need to be cut in order to lay inside the cement depending on chosen height"],
            ["Pour remaining cement until flat at the brim of the mold"],
            ["Allow cement to harden", "Cement hardening time can vary depending on the type used but will typically take a few hours", "The cement used was Quickrete Fast Drying Cement."]
        ],
        '/img/how/2/resized/'
    );

    $html .= <<<HTML
        <div class="instructionsBanner" id="step3">
            3.) Add Urethane Coating and Steel Ring
        </div>
HTML;

    $html .= $this->createInstructionStep(
        "step3",
        "3",
        "Add Urethane Coating and Center Ring",
        [
            [
                "Mix up urethane liquid rubber along with colorant",
                "The liquid rubber used is Smooth-On Urecoat",
                "Urecoat is mixed 10 Parts A to 1 Part B by volume",
                "Total amount of Urecoat used ~92in^3"
            ],
            [
                "Add a layer of mold release spray",
                "Universal Mold Release spray was used"
            ],
            [
                "Add a precut galvanized steel pipe over the center of the rubber mold",
                "For 45 lbs cut the pipe to 2.57 in.",
                "For 25 lbs cut the pipe to 1.47 in.",
                "For 10 lbs cut the pipe to 0.64",
                "Rough the pipe up with some sanding before placing"
            ],
            [
                "Pour half the urethane rubber into the mold",
                "Make sure the rubber is covering the bottom and up on walls"
            ],
            [
                "Place the cement plate into the mold",
                "Slightly press the plate into the mold"
            ],
            [
                "Pour the remaining urethane rubber into the mold",
                "Brush the rubber flat",
                "Use a blow torch to help remove bubbles"
            ],
            [
                "Allow the rubber to cure around 16 hours"
            ]
        ],
        '/img/how/3/resized/'
    );

    $html .= <<< HTML
        </div>
        <script src="js/externalFunctions.js"></script>
        <script src="js/howPageFunctions.js"></script>

HTML;

        return $html;
    }

    function createInstructionStep($id, $number, $title, $steps, $images=null) {
        $html = '<div class="instructionStep" id=' . $id . '>';
        $html .= <<< HTML
            <div class="instructionNumber">
                <div class="numberContainer">
                    <div class="numberText">$number</div>
                    <svg class="numberSvg">
                        <circle class="numberCircle" />
                    </svg>
                </div>
            </div>

            <div class="instructionImages">
                <div class="imageDisplayContainer" onclick="zoomTutorialImage(this);">

HTML;
        //gets our given directory of images
        $dir = $_SERVER['DOCUMENT_ROOT'] . $images;
        $files = scandir($dir);

        //filters out only .jpg files AND sort by number
        $filteredFiles = array_values(array_filter($files, function($var) {
            return strpos($var, ".jpg");
        }));

        sort($filteredFiles, SORT_NUMERIC);

        if(count($filteredFiles) > 0) {
            //add our main display image
            $html .= '<img class="imageDisplay" loading="lazy" src=' . $images . $filteredFiles[0] . '>';
            $html .= '</div>';

            //add our imageSelector
            $html .= '<div class="imageSelection">';
            for($image = 0; $image < count($filteredFiles); $image++) {
                $html .= "<img class=\"howImage";
                if($image == 0) {
                    $html .= " active";
                }
                $html .= "\" src=\"" . $images . $filteredFiles[$image] . "\" onclick=\"changeTutorialImage(this)\">";
            }

        } else {
            $html .= '<div class="howErrorMessage">No images found</div>';
        }

        $html .= <<< HTML
                </div>
            </div>
            <div class="instructionDescription">
                <div class="instructionTitle">
                    $title
                </div>
                <div class="instructionList">
                    <ol>
HTML;
        if($id == "step1Aa") {
            $html .= '<div class="partContainer">';
            $html .= '<a class="partLink" href="/parts/Concrete/cement_base_45.stl">Concrete Mold STL (No Handle)</a>';
            $html .= '<a class="partLink" href="/parts/Concrete/cement_handle_45.stl">Concrete Mold STL (Handle)</a>';
            $html .= '</div>';
        }

        if($id == "step1Ba") {
            $html .= '<div class="partContainer">';
            $html .= '<a class="partLink" href="/parts/Rubber/rubber_base_45.stl">Rubber Mold STL (No Handle)</a>';
            $html .= '<a class="partLink" href="/parts/Rubbe/rubber_handle_45.stl">Rubber Mold STL (Handle)</a>';
            $html .= '</div>';
        }

        for($step = 0; $step < count($steps); $step++) {
            $html .= '<li>';
            for($detail = 0; $detail < count($steps[$step]); $detail++) {
                if($detail == 0) {
                    //add to list as a main step
                    $html .= $steps[$step][$detail];
                } else {
                    //add to list as an extra detail
                    $html .= '<div class="detail">•' . $steps[$step][$detail] . '</div>';
                }
            }
            $html .= '</li>';
        }

        $html .= <<< HTML
                    </ol>
                </div>
            </div>
        </div>
HTML;

        return $html;
    }
}
