<?php namespace Larangular\Models\User;

/**
 * @description an event handler for user model related events
 * Class ModelEventServiceProvider
 */
use Illuminate\Support\Facades\Event;
use Larangular\Core\Event\EventHandler;
use Larangular\Core\Event\EventHandlerAbstract;
use Larangular\Core\Event\EventHandlerInterface;
class UserEventHandler extends EventHandler{

    /**
     * @description the subscribe method on a model is fired whenever an event is fired. Note Event::subscribe('class')
     * @param $events
     */
    public function subscribe($events)
    {
        //Insert all of your events and bindings like so
        $events->listen('user.testevent','Larangular\Models\User\UserEventHandler@onTestEvent');

    }

    public function onTestEvent()
    {
        echo "this is another way to subscribe to an event. In this case as it relates to the user model";
    }


}