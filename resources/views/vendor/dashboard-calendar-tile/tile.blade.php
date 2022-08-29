<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="{{ isset($title) ? 'space-y-2' : '' }} h-full calendar-tile overflow-scroll">
        @isset($title)
            <h1 class="uppercase font-bold">
                {{ $title }}
            </h1>
        @endisset

        <ul class="divide-y-2">
            @foreach($events as $event)
                <li class="py-1">
                    <div class="my-2">
                        <div class="{{ $event['withinWeek'] ? 'font-semibold' : '' }}">
                            {{ $event['name'] }}
                        </div>
                        <div class="text-sm {{ $event['date']->diffInHours(now()) < 24 ? 'text-green-600' : 'text-dimmed' }}">
                            {{ $event['formattedDate'] }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-dashboard-tile>
