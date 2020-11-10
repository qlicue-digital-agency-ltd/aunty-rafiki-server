<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 20-Apr-20
 * Time: 21:55
 */
?>

@extends('layout.app', ['title' => __(' Manage Types of Entities')])

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/flags.css')}}">
@endsection

@section('content')
    @include('layouts.headers.header',['title'=>'Entity Types'])
    @include('entities.modals.entity_type.edit')
    @include('entities.modals.entity_type.delete')

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
                                <h3 class="mb-0">{{ __('Entities Types') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary text-white"
                                   data-toggle="collapse" data-target="#createSubscriber"
                                   aria-expanded="false" aria-controls="createSubscriber"
                                >{{ __('Add Entity Type') }}</a>
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
                                                        <h3 class="mb-0">{{ __('New Entity Type') }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{ route('entity.type.create') }}"
                                                      autocomplete="off">
                                                    @csrf
                                                    <div class="pl-lg-4">
                                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                                            <label class="form-control-label"
                                                                   for="name">{{ __('name') }}</label>
                                                            <div class="input-group">
                                                                <input type="text" name="name" id="name"
                                                                       class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                       placeholder="{{ __('Type name') }}"
                                                                       value="{{ old('name') }}" required
                                                                       autofocus>
                                                            </div>

                                                            @if ($errors->has('name'))
                                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                                            @endif
                                                        </div>

                                                    </div>


                                                    <div class="text-center">
                                                        <button type="submit"
                                                                class="btn btn-success mt-4">{{ __('Add') }}</button>
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
                    <table id="entityTypes" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th class="text-center" scope="col">{{ __('Index') }}</th>
                            <th class="text-left" scope="col">{{ __('Name') }}</th>
                            <th class="text-center" scope="col" class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($entityTypes as $entityType)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-left">
                                    {{ $entityType->name }}
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item"
                                                   data-toggle="modal" data-target="#editEntityType"
                                                   data-entity_type="{{$entityType}}">{{ __('Edit') }}</a>
                                                <a class="dropdown-item" data-toggle="modal"
                                                   data-target="#deleteEntityType"
                                                   data-entity_type="{{$entityType}}">
                                                    {{ __('Delete') }}
                                                </a>

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

        $('#editEntityType').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var entityType = button.data('entity_type')

            var modal = $(this)
            modal.find('.modal-title').text('Edit Entity Type')
            modal.find('.id').val(entityType['id'])
            modal.find('.name').val(entityType['name'])
        });

        $('#deleteEntityType').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var entityType = button.data('entity_type')

            var modal = $(this)
            modal.find('.modal-title').text('Delete Entity Type')
            modal.find('.id').val(entityType['id'])
            modal.find('.modal-body').text('Are you sure you want to delete Entity Type '+ entityType['name'] +' ?')
        });
    </script>
@endsection

