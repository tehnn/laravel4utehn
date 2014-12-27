<?php

/**
 * Description of MyController
 *
 * @author UTEHN
 */
class MyController extends BaseController {

    public function show() {
       $data=array('name'=>'UTEHN');
        return View::make('test.vw1')->with($data);
    }

}
