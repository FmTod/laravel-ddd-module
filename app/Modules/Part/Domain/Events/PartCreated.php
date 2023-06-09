<?php


namespace App\Modules\Part\Domain\Events;


use App\Modules\Part\Domain\Models\Part;

class PartCreated
{
    public $part;

    public function __construct(Part $part)
    {
        $this->part = $part;
    }
}
