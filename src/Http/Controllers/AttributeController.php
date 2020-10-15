<?php

namespace GGPHP\Customer\Http\Controllers;

use Webkul\Shop\Http\Controllers\Controller;

class AttributeController extends Controller
{
    public function index()
    {
        return view($this->_config['view']);
    }

    public function edit()
    {
        return view($this->_config['view']);
    }

    public function destroy()
    {
        return view($this->_config['view']);
    }

    public function massDestroy()
    {
        return view($this->_config['view']);
    }
}
