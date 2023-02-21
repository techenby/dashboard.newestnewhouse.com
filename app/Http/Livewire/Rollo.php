<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Rollo extends Component
{
    public string $position;
    public $refreshInSeconds;

    protected $listeners = [
        'activity-start' => '$refresh',
        'activity-stop' => '$refresh',
    ];

    public function mount(string $position, int $refreshInSeconds = null)
    {
        $this->position = $position;
        $this->refreshInSeconds = $refreshInSeconds;
    }

    public function render()
    {
        return view('livewire.rollo', [
            'currentBlock' => $this->currentBlock,
            'spaces' => $this->spaces,
            'refreshIntervalInSeconds' => $this->refreshInSeconds ?? config('dashboard.tiles.rollo.refresh_interval_in_seconds') ?? 10,
        ]);
    }

    public function getCurrentBlockProperty()
    {
        return Http::acceptJson()
            ->withToken(config('services.rollo.key'))
            ->get(config('services.rollo.url') .'/api/activities/current')
            ->json();
    }

    public function getSpacesProperty()
    {
        return Http::acceptJson()
            ->withToken(config('services.rollo.key'))
            ->get(config('services.rollo.url') .'/api/spaces')
            ->json();
    }

    public function start($id)
    {
        Http::acceptJson()
            ->withToken(config('services.rollo.key'))
            ->post(config('services.rollo.url') . "/api/blocks", [
                'activity_id' => $id,
            ]);

        $this->emit('activity-start');
    }

    public function stop()
    {
        $response = Http::acceptJson()
            ->withToken(config('services.rollo.key'))
            ->patch(config('services.rollo.url') . "/api/blocks/{$this->currentBlock['id']}/stop");

        if ($response->successful()) {
            $this->emit('activity-stop');
        } else {
            dd($response);
        }
    }
}
