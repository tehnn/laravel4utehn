<?php

/**
 * Description of MyController
 *
 * @author UTEHN
 */
class MyController extends BaseController {

    public function show() {
       
        return View::make('test.vw1')->with(array(
            'name'=>'UTEHN PHNU'
        ));
    }

}
