<?php

namespace GGPHP\Customer\Http\Controllers;

use Webkul\Shop\Http\Controllers\Controller;

class AttributeController extends Controller
{
    public function index()
    {
        return view($this->_config['view']);
    }
}
