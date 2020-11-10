<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 01-Sep-20
 * Time: 10:29
 */
?>

@extends('layout.app', ['title' => __(' Manage Types of Products')])

@section('styles')

@endsection

@section('content')
    @include('layouts.headers.header',['title'=> "{$topic->title}"])
    @include('topic.modals.subtopic.edit')
    @include('topic.modals.subtopic.delete')
    <div class="container-fluid mt--7">


        <div class="row  justify-content-end my-2">




            <div class="col">
                <a class="text-white mr-2" href="{{route('topics')}}">
                    <i class="fa fa-2x text-white fa-arrow-left"></i>
                </a>
                <strong class="text-white pb-2">
                    Subtopics
                </strong>

            </div>

            <a class="btn btn btn-primary text-white align-self-end"
               data-toggle="collapse" data-target="#new-subtopic"
               aria-expanded="false" aria-controls="new-subtopic"
            > <i class="fa fa-plus"></i> {{ __('New Subtopic') }}</a>


        </div>

        <div class="collapse" id="new-subtopic">
            {{--<div class="col ">--}}
            <div class="row  justify-content-center">
                <div class="col col-xl-6 col-md-8 col-lg-6 col-sm-10">
                    <div class="col">
                        <div class="col-xl-12 order-xl-1 ">
                            <div class="card bg-secondary shadow">
                                <div class="card-header bg-white border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">{{ __('New Subtopic') }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('subtopic.create') }}" enctype="multipart/form-data"
                                          autocomplete="off">
                                        @csrf
                                        <input type="text" name="ekilimo_id" value="{{$topic->id}}" hidden>
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">

                                                <label class="form-control-label"
                                                       for="title">{{ __('Title') }}</label>
                                                <div class="input-group">
                                                    <input type="text" name="title" id="title"
                                                           class="form-control {{ $errors->has('tile') ? ' is-invalid' : '' }}"
                                                           placeholder="{{ __('Subtopic title') }}"
                                                           value="{{ old('title') }}" required
                                                           autofocus>
                                                </div>

                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-row justify-content-center">
                                            <img id="subtopic-image-preview" style="max-width: 80%" src=""
                                                 onerror="this.onerror=null; this.src='{{asset('icons/empty.png')}}'; this.alt='No Subtopic image' "
                                                 class="img-fluid mb-2" alt="Subtopic Image"/>
                                        </div>

                                        <div class="input-group mt-1 mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="logoDescription">Image</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                       id="subtopic-image"
                                                       aria-describedby="subtopic-image-description"
                                                       onchange="readURL(this);">
                                                <label class="custom-file-label" for="subtopic-image">Choose Image</label>
                                            </div>
                                        </div>

                                        <div class="form-row justify-content-center">
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
    </div>
    <div class="row mx-2">
        @foreach($topic->eKilimoCategories as $subtopic)
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 col mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <strong>{{$subtopic->title}}</strong>
                            <span class="ml-auto">
                                <div class="dropdown">
                                                <a class=" text-light" href="#" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item"
                                                       data-toggle="modal" data-target="#editSubtopicModal"
                                                       data-subtopic="{{$subtopic}}" >
                                                        {{ __('Edit') }}
                                                    </a>

                                                    <a class="dropdown-item" data-toggle="modal"
                                                       data-target="#deleteSubtopicModal"
                                                       data-subtopic="{{$subtopic}}">
                                                        {{ __('Delete') }}
                                                    </a>

                                                </div>
                                            </div>
                            </span>
                        </div>

                    </div>
                    <div  style="height: 260px">
                        <img class="card-img-bottom img-fluid " style="height: 260px; object-fit: cover;"
                             src="{{$subtopic->image}}" alt="">


                        <div class="col  mt--6 m-0">
                            <div class="row m-0 justify-content-end">
                                <a href="{{route('subtopic',$subtopic->id)}}" class="btn btn-primary mr-0  align-self-end">
                                    <i class="fa fa-eye"></i> View
                                </a>
                            </div>
                        </div>



                    </div>

                    {{--<div class="card-footer align-self-end py-0" >--}}
                    {{--<button class="btn btn-primary m-0 my-1"> {{count($topic->eKilimoCategories)}} Subtopics</button>--}}
                    {{--</div>--}}
                </div>
            </div>
        @endforeach
    </div>
    <div class="row m-7">
        <div class="col">

        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#subtopic-image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            else {
                $('#subtopic-image-preview').attr('src', '{{ asset('icons/empty.png') }}');
            }
        }

        $('#editSubtopicModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var subtopic = button.data('subtopic')

            localStorage.setItem('subtopicImage', subtopic['image']);

            var modal = $(this)

            modal.find('#subtopic_id').val(subtopic.id);
            modal.find('#modalSubtopicTitle').val(subtopic['title']);
            modal.find('#modal-subtopic-image-preview').attr('src',subtopic.image);
//            $('#modal-topic-image-preview').attr('src', '');
        });

        $('#deleteSubtopicModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var subtopic = button.data('subtopic')



            var modal = $(this)

            modal.find('.subtopic-id').val(subtopic.id);
            modal.find('.modal-body').text('Are you sure you want to delete the subtopic '+subtopic['title']);

//            $('#modal-topic-image-preview').attr('src', '');
        });
    </script>
@endsection