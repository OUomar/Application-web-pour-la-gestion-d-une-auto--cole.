@extends('user.layouts.Principale')
@section('title')
Profil
@endsection
@section('css')

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.min.js"></script>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        var calendar = $('#calendar').fullCalendar({

            customButtons: {
    myCustomButton: {
      text: 'custom!',
      click: function() {
        alert('clicked the custom button!');
      }
    }
  },
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            navLinks: true,
            editable: true,
            eventLimit: true,
            events : [
                @foreach($events as $events)
                {
                    title : '{{ $events->title . '  \ncour de ' . $events->type. ' \n' . $events->id_moniteur}}',
                    start : '{{ $events->start}}',
                    @if ($events->end)
                            end: '{{$events->end}}',
                    @endif
                },
                @endforeach
            ],
            displayEventTime: false,
            eventRender: function (event, element, view) {

                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }

            },
        selectable: false,
        selectHelper: false,


        });
    });
</script>
@endsection
@section('content')

<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg shadow-md  mx-10">
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="container">
                        <div class="card shadow-2xl">
                            <div class=" card-header  bg-success">

                            </div>
                            <div class="card-body" >
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>

         </div>
    </div>
</div>

@endsection

