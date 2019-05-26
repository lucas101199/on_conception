<?php
class Controller_home extends Controller{

    public function action_default() {
        $this->action_home_page();
    }

    public function action_home_page() {
        $this->render("home");
    }

    public function action_agence() {
        $this->render("agence");
    }

    public function action_real() {
        $this->render("real");
    }

    public function action_job() {
        $this->render("job");
    }

    public function action_contact() {
        $this->render("contact");
    }
}