<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<div id="calendar_title">
    <h3>@lang('home.calendar')</h3>
</div>

<div id='calendar'></div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

<script src='{{$calendar}}'></script>

<script>
        $('#calendar').fullCalendar({
            events : [
                @foreach($events as $event)
                {
                    title : '{{ $event->getLocalTitle() }}',
                    start : '{{ $event->startDate }}',
                    end : '{{$event->endDate}}',
                    url : '{{ route('event.show', $event->id) }}'
                },
                @endforeach
            ]
        })
</script>