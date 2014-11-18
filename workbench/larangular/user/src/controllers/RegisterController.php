<?php namespace Larangular\User\Controllers;
use Larangular\User\Controllers\BaseController;
use Illuminate\Support\Facades\View;
class RegisterController extends BaseController
{
    public function show()
    {
        $data = array();
        {
            $this->layout = View::make('user::layouts.default');
            $this->layout->content = View::make('user::pages.register.show');
        }
    }

}