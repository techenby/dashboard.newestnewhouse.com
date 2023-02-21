<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="h-full calendar-tile overflow-scroll">
        <h1 class="uppercase font-bold">
            Rollo
        </h1>

        @if ($currentBlock)
            <button wire:click="stop" class="my-4 w-full px-2 py-3 flex items-center justify-between rounded-lg" style="background: {{ $currentBlock['activity']['color'] }}">
                <span>{{ $currentBlock['activity']['space']['icon'] }} {{ $currentBlock['activity']['title'] }}</span>
                <div class="flex items-center justify-between space-x-2">
                    <span>{{ $currentBlock['duration'] }}</span>
                </div>
            </button>
        @endif

        <ul class="divide-y-2">
            @foreach($spaces as $space)
            <li wire:key="space-{{ $space['id'] }}">
                <div class="px-3 py-2 space-x-2">
                    <span>{{ $space['icon'] }}</span>
                    <span>{{ $space['title'] }}</span>
                </div>

                <ul wire:key="space-{{ $space['id'] }}-activities">
                    @foreach($space['activities'] as $activity)
                    <li wire:key="activity-{{ $activity['id'] }}" class="px-2 py-3">
                        <button type="button" wire:click="start({{ $activity['id'] }})" class="w-full flex space-x-2 items-center">
                            <div class="w-5 h-5 rounded-full flex items-center justify-center" style="background-color: {{ $activity['color'] }}">
                            </div>
                            <div>{{ $activity['title'] }}</div>
                        </button>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</x-dashboard-tile>
