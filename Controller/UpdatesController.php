<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nikhil
 * Date: 1/3/13
 * Time: 1:12 PM
 * To change this template use File | Settings | File Templates.
 */

class UpdatesController extends AppController
{

    public function index()
    {
        $this->layout = "";
        pr($this->request);

        if($this->request->is('get'))
        {
            echo "GET\n";
        }
        if($this->request->is('post'))
        {
            echo "POST\n";
        }
        if($this->request->is('put'))
        {
            echo "PUT\n";
        }
    }
}