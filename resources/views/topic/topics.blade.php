<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 31-Aug-20
 * Time: 16:02
 */
?>

@extends('layout.app', ['title' => __(' Manage Types of Products')])

@section('styles')

@endsection

@section('content')
    @include('layouts.headers.header',['title'=>'Topics'])
    @include('topic.modals.topic.edit')
    @include('topic.modals.topic.delete')
    <div class="container-fluid mt--7">
        <div class="row  justify-content-end my-2">

            <a class="btn btn btn-primary text-white align-self-end"
               data-toggle="collapse" data-target="#new-topic"
               aria-expanded="false" aria-controls="new-topic"
            > <i class="fa fa-plus"></i> {{ __('New Topic') }}</a>


        </div>

        <div class="collapse" id="new-topic">
            {{--<div class="col ">--}}
            <div class="row  justify-content-center">
                <div class="col col-xl-6 col-md-8 col-lg-6 col-sm-10">
                    <div class="col">
                        <div class="col-xl-12 order-xl-1 ">
                            <div class="card bg-secondary shadow">
                                <div class="card-header bg-white border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">{{ __('New Topic') }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('topic.create') }}" enctype="multipart/form-data"
                                          autocomplete="off">
                                        @csrf
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">

                                                <label class="form-control-label"
                                                       for="name">{{ __('Title') }}</label>
                                                <div class="input-group">
                                                    <input type="text" name="title" id="name"
                                                           class="form-control {{ $errors->has('tile') ? ' is-invalid' : '' }}"
                                                           placeholder="{{ __('Topic title') }}"
                                                           value="{{ old('title') }}"
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
                                            <img id="topic-image-preview" style="max-width: 80%" src=""
                                                 onerror="this.onerror=null; this.src='{{asset('icons/empty.png')}}'; this.alt='No Topic image' "
                                                 class="img-fluid mb-2 topic-image-preview" alt="Topic Image"/>
                                        </div>

                                        <div class="form-group ">
                                            <div class="input-group mt-1 mb-3 ">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="logoDescription">Image</span>
                                                </div>
                                                <div class="custom-file ">
                                                    <input type="file" name="image" class="custom-file-input {{ $errors->has('image') ? ' is-invalid' : '' }}"
                                                           id="topic-image"
                                                           aria-describedby="topic-image-description"
                                                           onchange="readURL(this);">
                                                    <label class="custom-file-label @if ($errors->has('image')) text-danger @endif" for="topic-image">
                                                        @if ($errors->has('image'))
                                                        {{ $errors->first('image') }}
                                                        @else
                                                        Choose Image
                                                        @endif
                                                    </label>


                                                </div>

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
        @foreach($topics as $topic)
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 col mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <strong>{{$topic->title}}</strong>
                            <span class="ml-auto">
                                <div class="dropdown">
                                                <a class=" text-light" href="#" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item"
                                                       data-toggle="modal" data-target="#editTopicModal"
                                                       data-topic="{{$topic}}" >
                                                        {{ __('Edit') }}
                                                    </a>

                                                    <a class="dropdown-item" data-toggle="modal"
                                                       data-target="#deleteTopicModal"
                                                       data-topic="{{$topic}}">
                                                        {{ __('Delete') }}
                                                    </a>

                                                </div>
                                            </div>
                            </span>
                        </div>

                    </div>
                    <div  style="height: 260px">
                        <img class="card-img-bottom img-fluid " style="height: 260px; object-fit: cover;"
                             src="{{$topic->image}}" alt="">


                        <div class="col  mt--6 m-0">
                            <div class="row m-0 justify-content-end">
                                <a href="{{route('topic',$topic->id)}}" class="btn btn-primary mr-0  align-self-end"> {{count($topic->eKilimoCategories)}}
                                    Subtopics
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
                    $('#topic-image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            else {
                $('#topic-image-preview').attr('src', '{{ asset('icons/empty.png') }}');
            }
        }

        $('#editTopicModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var topic = button.data('topic')

            console.log('ImG',topic['image']);
            localStorage.setItem('topicImage', topic['image']);

            var modal = $(this)

            modal.find('#topic_id').val(topic.id);
            modal.find('#modalTopicTitle').val(topic['title']);
            modal.find('#modal-topic-image-preview').attr('src',topic.image);
//            $('#modal-topic-image-preview').attr('src', '');
        });

        $('#deleteTopicModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var topic = button.data('topic')


            var modal = $(this)

            modal.find('.topic-id').val(topic.id);
            modal.find('.modal-body').text('Are you sure you want to delete the subtopic '+topic['title']);

//            $('#modal-topic-image-preview').attr('src', '');
        });
    </script>
@endsection
