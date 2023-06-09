<?php

namespace App\Modules\Part\UI\Console\Commands;

use Illuminate\Console\Command;
use App\Modules\Part\Domain\Services\PartService;
use App\Modules\Part\Domain\Exceptions\PartNotFoundException;

class DeletePartCommand extends Command
{
    protected $signature = 'part:delete {id : The ID of the part}';
    protected $description = 'Delete a part';

    protected $partService;

    public function __construct(PartService $partService)
    {
        parent::__construct();
        $this->partService = $partService;
    }

    public function handle()
    {
        $id = $this->argument('id');

        try {
            $part = $this->partService->findPart($id);

            if (!$part) {
                throw new PartNotFoundException();
            }

            $this->partService->deletePart($part);

            $this->info('Part deleted successfully.');
        } catch (PartNotFoundException $exception) {
            $this->error('Part not found.');
        }
    }
}
