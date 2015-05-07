<?php

class WorkController extends BaseController {

    public function index()
    {
        return View::make('work.index');
    }

    public function space()
    {
        return View::make('work.partners-in-space');
    }

    public function whackamole()
    {
        return View::make('work.whack-a-mole');
    }

    public function simpleSimon()
    {
        return View::make('work.simple-simon');
    }

}
