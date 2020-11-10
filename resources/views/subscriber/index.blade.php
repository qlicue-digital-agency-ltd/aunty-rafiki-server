@extends('layout.app', ['title' => __('User Management')])

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/flags.css')}}">
@endsection

@section('content')
    @include('layouts.headers.header',['title'=>'Subscribers'])
    @include('subscriber.edit')
    @include('subscriber.delete')

    <div class="container-fluid mt--7">

        <div class="card shadow">
            <div class="row">
                <div class="col">
                    {{--<div class="row">--}}
                    {{--ZZZ--}}
                    {{--<span style="background-image: {{ asset('/images/vendor/flag-icon-css/flags/4x3/tz.svg') }}"></span>--}}
                    {{--<img src="{{asset( '/images/vendor/flag-icon-css/flags/1x1/tz.svg')}}" alt="">--}}
                    {{--</div>--}}

                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Subscribers') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary text-white"
                                   data-toggle="collapse" data-target="#createSubscriber"
                                   aria-expanded="false" aria-controls="createSubscriber"
                                >{{ __('Add Subscriber') }}</a>
                            </div>
                        </div>
                        <div class="collapse" id="createSubscriber">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-md-8 col-lg-6 col-sm-10">
                                    <div class="col-xl-12 order-xl-1 ">
                                        <div class="card bg-secondary shadow">
                                            <div class="card-header bg-white border-0">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h3 class="mb-0">{{ __('New Subscriber') }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{ route('subscriber.create') }}"
                                                      autocomplete="off">
                                                    @csrf
                                                    <div class="pl-lg-4">
                                                        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">

                                                            <label class="form-control-label"
                                                                   for="phone">{{ __('Phone') }}</label>

                                                            {{--<div class="row">--}}
                                                            {{--<div class="input-group mb-3">--}}
                                                            {{--<div class="input-group-prepend">--}}
                                                            {{--<label class="input-group-text"--}}
                                                            {{--for="inputGroupSelect01">Country</label>--}}
                                                            {{--</div>--}}


                                                            {{--<div class="dropdown">--}}
                                                            {{--<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Image Droprdown--}}
                                                            {{--<span class="caret"></span>--}}
                                                            {{--</button>--}}
                                                            {{--<ul class="dropdown-menu ">--}}
                                                            {{--@foreach($countries as $country)--}}
                                                            {{--<li>--}}
                                                            {{--<img style="width: 1.3em; height: 1em" src="{{asset( '/countries/flags/'.$country['flag']) }}" alt="">  {{$country['name']}}--}}
                                                            {{--</li>--}}
                                                            {{--@endforeach--}}
                                                            {{--</ul>--}}
                                                            {{--</div>--}}
                                                            {{----}}
                                                            {{--<select class="custom-select"--}}
                                                            {{--id="inputGroupSelect01">--}}
                                                            {{--<option selected>Choose...</option>--}}
                                                            {{--<ul class="dropdown-menu">--}}
                                                            {{--@foreach($countries as $country)--}}
                                                            {{--<option value="{{$country['code']}}"> {{$country['name']}}  </option>--}}
                                                            {{--@endforeach--}}
                                                            {{--</ul>--}}
                                                            {{--<option value="1">One</option>--}}
                                                            {{--<option value="2">Two</option>--}}
                                                            {{--<option value="3">Three</option>--}}
                                                            {{--</select>--}}

                                                            {{--</div>--}}


                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">+255</span>
                                                                </div>
                                                                <input type="tel" name="phone" id="phone"
                                                                       class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                                       placeholder="{{ __('714XXXXXX') }}"
                                                                       value="{{ old('phone') }}" required
                                                                       autofocus>
                                                            </div>

                                                            @if ($errors->has('phone'))
                                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                                            @endif
                                                        </div>

                                                    </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit"
                                                        class="btn btn-success mt-4">{{ __('Save') }}</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>

            <div class="table-responsive p-4">
                <table id="customers" class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center" scope="col">{{ __('Index') }}</th>
                        <th class="text-center" scope="col">{{ __('Phone') }}</th>
                        <th class="text-center" scope="col">{{ __('Subscription Date') }}</th>
                        <th class="text-center" scope="col">{{ __('Subscription Ends') }}</th>
                        <th class="text-center" scope="col" class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($subscribers as $user)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="text-center">
                                {{ $user->phone }}
                            </td>
                            <td class="text-center">{{ $user->created_at->format('d/m/Y') }}</td>
                            <td class="text-center">{{ $user->valid_till ? $user->valid_till->format('d/m/Y') : '-' }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        {{--@if ($user->id != auth()->id())--}}
                                        <form action="{{ route('subscriber.delete', $user) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <a class="dropdown-item"
                                               data-toggle="modal" data-target="#editSubscriber"
                                               data-subscriber="{{$user}}">{{ __('Edit') }}</a>
                                            <a class="dropdown-item" data-toggle="modal"
                                               data-target="#deleteSubscriber"
                                               data-subscriber="{{$user}}">
                                                {{ __('Delete') }}
                                            </a>
                                        </form>
                                        {{--@else--}}
                                        {{--<a class="dropdown-item" href="{{ route('subscriber.edit',0) }}">{{ __('Edit') }}</a>--}}
                                        {{--@endif--}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer py-4">
                <nav class="d-flex justify-content-end" aria-label="...">
                    hello
                    {{--                            {{ $users->links() }}--}}
                </nav>
            </div>
        </div>
    </div>

    </div>

    @include('layouts.footers.auth')
    </div>
@endsection

@section('scripts')
    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="{{asset('MDB/js/addons/datatables.min.js')}}"></script>
    <script>

        // Basic example
        $(document).ready(function () {
            $('#customers').DataTable({
                "pagingType": "simple_numbers" // "simple" option for 'Previous' and 'Next' buttons only
            });
            $('.dataTables_length').addClass('bs-select');
        });

        $('#editSubscriber').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var subscriber = button.data('subscriber')

            var modal = $(this)
            modal.find('.modal-title').text('Subscriber')
            modal.find('.subscriber-id').val(subscriber['id'])
            modal.find('.phone').val(subscriber['phone'])
        });

        $('#deleteSubscriber').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var subscriber = button.data('subscriber')

            var modal = $(this)
            modal.find('.subscriber-id').val(subscriber['id'])
            modal.find('.phone').val(subscriber['phone'])
        });
    </script>
@endsection
