<?php
//use Larangular\Repositories\MetaRepository;
use Larangular\Repositories\Meta\MetaRepositoryInterface;

class HomeController extends BaseController {

    public function __construct(MetaRepositoryInterface $meta)
    {
        $this->meta = $meta;
    }


	public function index()
	{
        echo $this->meta->test();
		return View::make('hello');
	}

}
