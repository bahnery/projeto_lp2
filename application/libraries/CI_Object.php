<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Object {

    public function __get($key) {
		return get_instance()->$key;
    }

}