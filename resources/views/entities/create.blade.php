<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 22-Apr-20
 * Time: 17:07
 */
?>

@extends('layout.app', ['title' => __('Create Entity')])

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/flags.css')}}">
@endsection

@section('content')
    @include('layouts.headers.header',['title'=>'Create Entity'])


    <div class="container-fluid mt--7">


    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">

                <div class="card-body px-lg-5 py-lg-5">
                    <img id="logo-preview" style="max-height: 120px" src="" onerror="this.onerror=null; this.src='{{asset('icons/empty.png')}}'; this.alt='Logo not set' " class="img-fluid mb-2" alt="Entity Logo"/>
                    <form role="form" method="POST" action="{{ route('entity.post') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="logoDescription">Logo</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="logo" class="custom-file-input" id="logo"
                                       aria-describedby="logoDescription" onchange="readURL(this);">
                                <label class="custom-file-label" for="logo">Choose Image</label>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('contacts') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('contacts') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone') }}" type="tel" name="contacts" required>
                            </div>
                            @if ($errors->has('contacts'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('contacts') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('entity_type') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <select class="form-control{{ $errors->has('entity_type_id') ? ' is-invalid' : '' }}"  name="entity_type_id" required>
                                    <option>Select Entity Type</option>
                                    @foreach($entityTypes as $entityType)
                                        <option value="{{$entityType->id}}">{{$entityType->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('entity_type'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('entity_type') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" placeholder="{{ __('Location') }}" type="text" name="location" >
                            </div>
                            @if ($errors->has('location'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4 " >{{ __('Create Entity') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    </div>


@endsection

@section('scripts')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logo-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            else {
                $('#logo-preview').attr('src', '{{ asset('icons/empty.png') }}');
            }
        }
    </script>
@endsection
