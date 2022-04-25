<?php
class Pages extends Controller {
    public function __construct() {
        // $this->postModel = $this->model("Post");
    }

    public function index() {
        $data = [
            "title" => "home"
        ];
        $this->view("pages/index", $data);
    }

    public function about() {
        $data = [
            "title" => "about"
        ];
        $this->view("pages/about", $data);
    }

    public function products() {
        $data = [
            "title" => "products"
        ];
        $this->view("pages/about", $data);
    }

    public function product() {
        $data = [
            "title" => "products"
        ];
        $this->view("pages/about", $data);
    }
}
?>