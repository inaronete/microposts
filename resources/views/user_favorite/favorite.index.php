@extends('layouts.app')

@section('content')
         <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('user/*/favorite') ? 'active' : '' }}"><a href="{{ route('user.favorite', ['id' => $user->id]) }}">favorities <span class="badge">{{ $count_favoriting }}</span></a></li>
            </ul>
            @if (count($favorites) > 0)
                @include('microposts.show', ['favorities' => $favorities])
            @endif
            </div> 
    </div>
@endsection