<?php namespace Larangular\Core\Event;

/**
 * @description an interface for event handlers
 * Class EventHandlerInterface
 */
interface EventHandlerInterface{

    public function subscribe($events);

}