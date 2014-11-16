<?php namespace Larangular\Core\Event;

/**
 * @description an abstract for event handler classes
 * Class EventHandlerAbstract
 */
use Illuminate\Support\Facades\Event;
abstract class EventHandlerAbstract{

    /**
     * @description the subscribe method is called automatically when Event::subscribe is used
     * @param $events
     */
    public function subscribe($events)
    {


    }

}