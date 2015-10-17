<?php

/**
 * The Default Example Controller Class
 *
 * @author Faizan Ayubi
 */
use Framework\Controller as Controller;
use Framework\Registry as Registry;
use Framework\RequestMethods as RequestMethods;

class Home extends Controller {

    public function seo($params = array()) {
        $seo = Registry::get("seo");
        foreach ($params as $key => $value) {
            $property = "set" . ucfirst($key);
            $seo->$property($value);
        }
        $params["view"]->set("seo", $seo);
    }

    public function index() {
        $this->getLayoutView()->set("seo", Framework\Registry::get("seo"));
    }

    public function contact() {
        $this->seo(array(
            "title" => "Login",
            "view" => $this->getLayoutView()
        ));
    }

    public function login() {
        $this->seo(array(
            "title" => "Support",
            "view" => $this->getLayoutView()
        ));
    }

    public function about() {
        $this->seo(array(
            "title" => "Buisness Enterprise Solutions CloudStuffs Provide",
            "view" => $this->getLayoutView()
        ));
    }

    public function affiliates() {
        $this->seo(array(
            "title" => "Why Affiliate?",
            "view" => $this->getLayoutView()
        ));
    }

}
