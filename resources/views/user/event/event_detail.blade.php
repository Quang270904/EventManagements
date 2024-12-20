@extends('user.dashboard.home.layout')

@section('contents')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Event Details</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>Event Name:</strong></label>
                        <p>{{ $event->name }}</p>
                    </div>
                    <div class="form-group">
                        <label><strong>Description:</strong></label>
                        <p>{{ $event->description }}</p>
                    </div>
                    <div class="form-group">
                        <label><strong>Location:</strong></label>
                        <p>{{ $event->location }}</p>
                    </div>
                    <div class="form-group">
                        <label><strong>Start Time:</strong></label>
                        <p>{{ $event->start_time ? $event->start_time->format('H:i') : 'Not set' }}</p>
                    </div>
                    <div class="form-group">
                        <label><strong>End Time:</strong></label>
                        <p>{{ $event->end_time ? $event->end_time->format('H:i') : 'Not set' }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>Start Date:</strong></label>
                        <p>{{ $event->start_time ? $event->start_time->format('Y-m-d') : 'Not set' }}</p>
                    </div>
                    <div class="form-group">
                        <label><strong>End Date:</strong></label>
                        <p>{{ $event->end_time ? $event->end_time->format('Y-m-d') : 'Not set' }}</p>
                    </div>
                    <div class="form-group">
                        <label><strong>Event Image:</strong></label>
                        @if ($event->image)
                            <div>
                                <img src="{{ Storage::url($event->image) }}" alt="Event Image" class="img-fluid"
                                    style="width: 100%; height: auto;">
                            </div>
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Display registration status -->
            @if ($isRegistered)
                <div class="form-group">
                    <p class="text-success"><strong>You have already registered for this event: {{ $event->name }}</strong>
                    </p>
                </div>
            @else
                <div class="form-group">
                    <p class="text-warning"><strong>You haven't registered for this event yet.</strong></p>
                </div>
            @endif

            <div class="form-group">
                <a href="{{ route('user.event') }}" class="btn btn-secondary">Back to Events</a>
            </div>
        </div>
    </div>
@endsection
