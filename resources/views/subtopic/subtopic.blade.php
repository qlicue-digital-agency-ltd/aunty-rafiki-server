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
    <style>
        .fab-btn-container {
            position: absolute;
            display: block;
            width: 50px;
            height: 50px;
            background-color: green;
            /*top: 0;*/
            left: 0;
            /*right: 0;*/
            bottom: 0;
            z-index: 2;
            /*cursor: pointer;*/
        }

        .fab-btn {
            position: relative;
            top: 0;
            left: 0;
            width: 50px;
            height: 50px;
            /*font-size: 50px;*/
            color: white;
            /*transform: translate(-50%,-50%);*/
            /*-ms-transform: translate(-50%,-50%);*/
        }
    </style>
@endsection

@section('content')
    @include('layouts.headers.header',['title'=> $subtopic->title])

    @include('subtopic.modals.create_paragraph')

    <div class="container-fluid mt--7 ">
        <div class="row justify-content-start">
            <div class="col">
                <a href="{{route('topic',$subtopic->ekilimo_id)}}">
                    <i class="fa fa-2x text-white fa-arrow-left"></i>
                </a>

            </div>

        </div>
        <div class="row justify-content-center ">


            <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 col ">
                <div class="card" style="height: 100vh;">
                    <div class="card-header">
                        <strong>
                            Paragraphs
                        </strong>
                        <div class="row justify-content-end">

                          <span class="avatar avatar-lg  rounded-circle" style=" height: 120px; width: 120px">
                            <img alt="Image placeholder" src="{{ $subtopic->image}}"
                                 style="height: 120px; object-fit: cover;">
                          </span>

                        </div>
                    </div>
                    <div class="card-body overflow-auto">

                        @foreach($subtopic->paragraphs as $paragraph)
                            <div class="row">
                                <div class="col my-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="text-capitalize">
                                                {{$paragraph->title}}
                                            </strong>
                                        </div>
                                        <div class="card-body">
                                            {{$paragraph->body}}
                                        </div>
                                        <div class="card-footer my-0">
                                            <div class="row justify-content-end">
                                                <div class="col-2">
                                                    <a data-toggle="modal" data-target="#createParagraph"
                                                       data-paragraph="{{$paragraph}}">
                                                        <div class="row">
                                                            Edit<i class="fa fa-pen ml-1 text-success"></i>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="col-2">
                                                    <a href="">
                                                        <div class="row">
                                                            Delete<i class="fa fa-trash ml-1 text-danger"></i>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                        @endforeach

                    </div>

                    {{--<div class="row bg-transparent mb-4 ml-4" style="z-index: 10">--}}
                    <div class="avatar flex-center fab-btn-container m-4">
                        <a data-toggle="modal" data-target="#createParagraph" class="fab-btn flex-center">
                            <div class="flex-center" style="width: 45px;height: 45px">
                                <i class="fa fa-plus"></i>
                            </div>

                        </a>
                    </div>

                    {{--<div class="flex-center bg-transparent">--}}
                    {{--<strong class="text-sm bg-transparent">Paragraph</strong>--}}
                    {{--</div>--}}

                    {{--</div>--}}


                </div>

            </div>

        </div>

    </div>
@endsection

@section('scripts')
    <script>
        // Treeview Initialization
        $(document).ready(function () {

            $('#createParagraph').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var paragraph = null;
                var modal = $(this);

                if (button.data("paragraph") != null) {
                    paragraph = button.data("paragraph");


                    modal.find('.modal-title').text('Edit Paragraph')
                    modal.find('.modal-body input#paragraph-title').val(paragraph['title'])
                    modal.find('.paragraph-id').val(paragraph['id'])
                    modal.find('.form-method').val('PUT')
                    modal.find('.paragraph-body').val(paragraph['body'])
                    modal.find('.subtopic-id').val(@json($subtopic->id))
                    $("#paragraph-form").attr("action", @json(route('paragraph.update')))
                }else{
                    modal.find('.form-method').val('POST')
                    modal.find('.modal-title').text('New Paragraph')
                    modal.find('.modal-body input#paragraph-title').val('')
                    modal.find('.paragraph-id').val('')
                    modal.find('.paragraph-body').val('')
                    modal.find('.subtopic-id').val(@json($subtopic->id))
                    $("#paragraph-form").attr("action", @json(route('paragraph.create')));
                }

                // modal.find('.card-header').text(menu)
                //modal.find('.text-muted').text(info)
            });
            $('#deleteMenu').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var menu = button.data("menu")
                var modal = $(this)
                modal.find('.modal-title').text('Delete Menu')
                modal.find('.modal-body input#menuToDelete').val(menu['name'])
                modal.find('.menu_id').val(menu['id'])
            });
            $('#createMenu').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var menu = button.data("menu")
                var modal = $(this)
                modal.find('.modal-title').text('Create New Menu')
                // modal.find('.modal-body input#menu-name').val(menu['name'])
                modal.find('.parent_id').val(menu['id'])
                if (menu !== "")
                    modal.find('.parent-menu').text('Menu inside "' + menu['name'] + '"')
                else modal.find('.parent-menu').text('Add Main Menu Item')

            });

        });
    </script>
@endsection
