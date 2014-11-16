<?php namespace Larangular\Core\Event;

/**
 * @description an abstract for event handler classes
 * Class EventHandlerAbstract
 */
use Illuminate\Support\Facades\Event;
use Larangular\Core\Event\EventHandlerAbstract;
use Larangular\Core\Event\EventHandlerInterface;
use Illuminate\Support\Facades\App;
class EventHandler extends EventHandlerAbstract implements EventHandlerInterface{

    /**
     * @description the subscribe method is called automatically when Event::subscribe is used
     * @param $events
     */
    public function subscribe($events)
    {
        $this->undefinedSubscribe();


    }

    private function undefinedSubscribe()
    {
        throw new \Exception("please define a subscribe method for ". get_class($this));
        die();
    }

}