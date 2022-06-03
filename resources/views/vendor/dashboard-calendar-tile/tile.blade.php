<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="{{ isset($title) ? 'space-y-8' : '' }} h-full">
        @isset($title)
            <h1 class="uppercase font-bold">
                {{ $title }}
            </h1>
        @endisset

        <ul class="divide-y-2">
            @foreach($events as $event)
                <li class="py-1">
                    <div class="my-2">
                        <div class="{{ $event['withinWeek'] ? 'font-medium' : '' }}">{{ $event['name'] }}</div>
                        <div class="text-sm text-dimmed">
                            {{ $event['date']->format('m/d/y h:i a') }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-dashboard-tile>
