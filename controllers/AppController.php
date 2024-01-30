<?php

class AppController {

    public function home() {
        include("views/index.php");
    }

    public function properties() {
        include("views/properties.php");
    }

    public function about() {
        include("views/about.php");
    }

    public function contact() {
        include("views/contact.php");
    }

    public function team() {
        include("views/team.php");
    }

    public function blog() {
        include("views/blog.php");
    }

    public function testimonials() {
        include("views/testimonials.php");
    }

    public function terms() {
        include("views/terms.php");
    }
}





?>