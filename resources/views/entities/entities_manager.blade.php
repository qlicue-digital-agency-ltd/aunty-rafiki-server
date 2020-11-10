<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 20-Apr-20
 * Time: 21:56
 */
?>

@extends('layout.app', ['title' => __(' Manage Types of Entities')])

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/flags.css')}}">
@endsection

@section('content')
    @include('layouts.headers.header',['title'=>'Entities Manager'])
    {{--@include('subscriber.edit')--}}
    {{--@include('subscriber.delete')--}}

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
                                <h3 class="mb-0">{{ __('Entities ') }}</h3>
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
                    <table id="entityTypes" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th class="text-center" scope="col">{{ __('Index') }}</th>
                            <th class="text-left">{{__('Logo')}}</th>
                            <th class="text-left" scope="col">{{ __('Name') }}</th>
                            <th class="text-left" scope="col">{{ __('Status') }}</th>
                            <th class="text-right" scope="col" class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($entities as $entity)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-left"><img src="{{$entity->logo}}" style="max-width: 50px " alt="Entity Logo" onerror="this.onerror=null; this.src='{{asset('icons/empty.png')}}'; this.alt='Logo not set' "></td>
                                <td class="text-left">
                                    {{ $entity->name }}
                                </td>
                                <td class="text-left">
                                    @if($entity->active)
                                        <span class="text-success">
                                            Enabled
                                        </span>
                                    @else
                                        <span class="text-danger">
                                            Disabled
                                        </span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <div class="row justify-content-end">
                                        <a href="{{route('entity.preview',$entity->id)}}">
                                            <button class="btn btn-sm btn-info px-2">
                                                <i class="fa fa-eye p-1"></i> Preview                                        </i>
                                            </button>
                                        </a>

                                        <form action="{{route('entity.status',$entity->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if($entity->active)
                                                <button type="submit" class="btn btn-sm btn-danger px-3">
                                                    Disable
                                                </button>
                                            @else
                                                <button type="submit" class="btn btn-sm btn-success px-3">
                                                    Enable
                                                </button>
                                            @endif
                                        </form>

                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
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
            $('#entityTypes').DataTable({
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

