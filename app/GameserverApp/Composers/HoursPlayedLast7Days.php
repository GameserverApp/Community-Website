<?php
namespace GameserverApp\Composers;

use Illuminate\View\View;
use GameserverApp\Api\Client;
use GameserverApp\Transformers\CharacterTransformer;
use GameserverApp\Transformers\GroupTransformer;

class HoursPlayedLast7Days extends AbstractStatsComposer
{

    public function compose(View $view)
    {
        try {
            $data = $this->basicStats($view, 'hours-played-last-7-days');
        } catch (\Exception $e) {
            $data = [];
        }

        $view->with([
            'stat' => (array) $data
        ]);
    }
}