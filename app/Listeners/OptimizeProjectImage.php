<?php

namespace App\Listeners;

use App\Events\ProjectSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use  Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class OptimizeProjectImage implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProjectSaved  $event
     * @return void
     */
    public function handle(ProjectSaved $event)
    {
        // throw new \Exception("Error optimizing the image", 1);

        $image = Image::make(Storage::get($event->project->image))
            ->widen(400)
            ->limitColors(255)
            ->encode();

        Storage::put($event->project->image, (string) $image);


    }
}
