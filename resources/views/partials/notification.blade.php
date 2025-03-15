{{-- resources/views/partials/notification.blade.php --}}
@if($notifications->isEmpty())
    <p class="dropdown-item">No new notifications</p>
@else
    @foreach($notifications as $notification)
        <a class="dropdown-item" href="#">
            <strong>{{ $notification->title }}</strong><br>
            {{ $notification->message }}
        </a>
    @endforeach
@endif
