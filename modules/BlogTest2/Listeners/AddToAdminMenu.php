<?php

namespace Modules\BlogTest2\Listeners;

use App\Events\Menu\AdminCreated as Event;

class AddToAdminMenu
{
    public function handle(Event $event): void
    {
        $event->menu->add([
            'route' => ['blog-test2.index', []],
            'title' => 'Blog Test 2',
            'icon'  => 'description',
            'order' => 50,
        ]);
    }
}
