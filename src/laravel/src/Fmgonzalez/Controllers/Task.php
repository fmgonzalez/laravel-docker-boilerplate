<?php

namespace Fmgonzalez\Controllers;
use Illuminate\Routing\Controller as BaseController;

class Task extends BaseController {

  public function index() {
    $defaultMessage = 'Tasks page';
    return view('fmgonzalez::home')->withMessage($defaultMessage);
  }

  public function show($id) {
    $defaultMessage = "Task $id page";
    return view('fmgonzalez::home')->withMessage($defaultMessage);
  }

}
