<?php
namespace PandemicPlates\Views;

/*The base View class that all pages will be built on*/
class View {
    /*Sets the tile of the page upon page creation*/
    public function setTitle($title) {
        $this->title = $title;
    }

    /*Return the head that all View classes will need*/
    /*Allow ability to add additional info per page in parameter*/
    public function head($additional="") {
        return <<<HTML
<head>
<meta charset="utf-8">
<title>$this->title</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7S2Z5DS7XZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7S2Z5DS7XZ');
</script>
$additional
</head>
HTML;
    }

    /*Add a link that will appear on the nav bar*/
    /*Indicates if link is active or not*/
    public function addLink($href, $text, $active=false) {
        $this->links[] = ["href" => $href, "text" => $text, "active" => $active];
    }

    /*HTML for the top logo*/
    public function logo() {
        $html = '<div id="logo" onclick="location.href=\'index.php\'">PandemicPlate</div>';
        return $html;
    }

    /*Return the navigation bar for our site*/
    public function navigation() {
        $addCart = false;
        $cartLink = null;

        $html = '<div id="navigation">';

        if(count($this->links) > 0) {
            $html .= '<ul>';
            foreach($this->links as $link) {
                if($link['text'] === "Cart") {
                    $addCart = true;
                    $cartLink = $link;
                } else {
                    //if link is cart/login/logout float right
                    if($link['text'] === "Contact") {
                        $html .= '<li id="right">';
                    } else {
                        $html .= '<li>';
                    }

                    //create link and indicate if this is active page
                    $html .= '<a class="navCell" ';
                    if($link['active']) {
                        $html .= 'id="active" ';
                    }
                    $html .= 'href="';
                    $html .= $link['href'] . '">' . $link['text'] . '</a></li>';
                }
            }

            //this is our jank solution to float the cart right before the login tag
            if($addCart) {
                $html .= '<li id="right">';
                //create link and indicate if this is active page
                $html .= '<a class="navCell" ';
                if($cartLink['active']) {
                    $html .= 'id="active" ';
                }
                $html .= 'href="';
                $html .= $cartLink['href'] . '">' . $cartLink['text'] . '</a></li>';
            }

            $html .= '</ul>';
        }
        $html .= '</div>';
        return $html;
    }

    function dropdownNavigation() {
        $html = '<div id="dropdownNavigation" onclick="showHideNav();">';
        $html .= '<a id="dropdownMenu">&#9776;</a>';

        if(count($this->links) > 0) {
            $html .= '<ul>';
            foreach($this->links as $link) {
                $html .= '<li>';

                //create link and indicate if this is active page
                $html .= '<a class="navCell" ';
                if($link['active']) {
                    $html .= 'id="active" ';
                }
                $html .= 'href="';
                $html .= $link['href'] . '">' . $link['text'] . '</a></li>';
            }
            $html .= '</ul>';
        }
        $html .= '</div>';
        return $html;
    }

    private $title = "";	// The page title
    private $links = [];	// Links to add to the nav bar
}
