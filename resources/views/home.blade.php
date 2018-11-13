{{-- @extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @guest
                <h1>Hey log toi</h1>
            @else
                <div class="card">
                    <div class="card-header text-center" id="logo">
                    </div>

                    <div class="contain">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif --}}
                            {{-- {{ $data->name }} --}}
                            {{-- <div class="row">
                                <div class="col">
                                    <div class="title text-center">
                                        <h1>Film of Hayao Miyazaki</h1>
                                    </div>
                                    @foreach ( $data as $value )
                                        @if ($value->director  == "Hayao Miyazaki")
                                            <div class="card-body text-white">
                                                <h1 class="card-title text-center bg-secondary rounded shadow-sm">{{ $value->title }}</h1>
                                                    <div class="card-content bg-info rounded">
                                                        <h4 class="font-italic">{{ $value->director }}</h4>
                                                        <h4 class="font-italic">{{ $value->release_date }}</h4>
                                                        <p>{{ $value->description }}</p>
                                                    </div>
                                            </div>
                                        @else
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col">
                                    <div class="title text-center">
                                        <h1>Film of Isao Takahata</h1>
                                    </div>
                                    @foreach ( $data as $value )
                                        @if ($value->director  == "Isao Takahata")
                                            <div class="card-body text-white">
                                                <h1 class="card-title text-center bg-secondary rounded shadow-sm">{{ $value->title }}</h1>
                                                    <div class="card-content bg-info">
                                                        <h4 class="font-italic">{{ $value->director }}</h4>
                                                        <h4 class="font-italic">{{ $value->release_date }}</h4>
                                                        <p>{{ $value->description }}</p>
                                                    </div>
                                            </div>
                                        @else
                                        @endif
                                    @endforeach
                                </div>
                        
                            </div>
                    </div>
                </div>
            @endguest --}}
        {{-- </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @guest
          {{-- view offline --}}
            <form class="" action="/searchSong" method="post">
              @csrf
              <input type="text" name="search" value="" placeholder="Search term">
              <input type="submit" name="" value="Search">
            </form>
            <ul>
              @foreach ($data as $value)
                <li>
                  {{ $value->title }} :
                  {{ $value->type }}
                </li>
              @endforeach
            </ul>
          @else
          {{-- view online --}}
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="" action="/updateOptions" method="post">
                      @csrf
                      @foreach ($options as $option)
                            <label for="{{ $option->value }}">{{ $option->value }}</label>
                            <input type="hidden" name="{{ $option->value }}[id]" value="{{ $option->id }}">
                                @if ($option->value === "nightmode")
                                    <input id="{{ $option->value }}" type="checkbox" name="{{ $option->value }}[value]" value="{{ $option->content }}"
                                        @if ($option->content === "true")
                                        checked
                                        @endif
                                        >
                                @else
                                    <input id="{{ $option->value }}" type="text" name="{{ $option->value }}[value]" value="{{ $option->content }}">                            
                                @endif
                      @endforeach
                      <input type="submit" name="" value="update">
                    </form>
                </div>
            </div>
          @endguest
        </div>
    </div>
</div>
@endsection
