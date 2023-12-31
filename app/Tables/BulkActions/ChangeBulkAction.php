<?php

namespace App\Tables\BulkActions;

use Illuminate\Support\Collection;
use Livewire\Component;
use Okipa\LaravelTable\Abstracts\AbstractBulkAction;

class ChangeBulkAction extends AbstractBulkAction
{
    protected function identifier(): string
    {
        // The unique identifier that is required to retrieve the bulk action.
    }

    protected function label(array $allowedModelKeys): string|null
    {
        // The label that will appear in the bulk action link.
    }

    protected function defaultConfirmationQuestion(array $allowedModelKeys, array $disallowedModelKeys): string|null
    {
        // The default bulk action confirmation question that will be asked before execution.
        // Return `null` if you do not want any confirmation question to be asked by default.
    }

    protected function defaultFeedbackMessage(array $allowedModelKeys, array $disallowedModelKeys): string|null
    {
        // The default bulk action feedback message that will be triggered on execution.
        // Return `null` if you do not want any feedback message to be triggered by default.
    }

    /** @return mixed|void */
    public function action(Collection $models, Component $livewire)
    {
        // The treatment that will be executed on click on the bulk action link.
        // Use the `$livewire` param to interact with the Livewire table component and emit events for example.
    }
}
