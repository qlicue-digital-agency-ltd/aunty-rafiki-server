<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 18-Nov-19
 * Time: 17:25
 */
?>

@extends('layout.app')
@section('content')
    @include('message.view_message')
    @include('message.edit_message')
    @include('menu.create')
    @include('menu.edit')
    @include('menu.delete')
    @include('layouts.headers.header',['title'=>'Menu Tree'])
    <div class="container-fluid  pb-4">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card mt--7 pb-9 bg-gradient-secondary">
                    <div class="card-body">
                        <div class="col  pt-2 d-flex justify-content-center ">
                            {{--                    <div class="treeview col-xl-6 col-lg-8 col-md-10 col-sm-12 border ">--}}
                            <div class="treeview ">
                                <h1 class="pt-3 pl-3 "> E-KILIMO</h1>
                                <hr>
                                <ul class="mb-1 pl-3 pb-2">
                                    @foreach($tree as $menu)
                                        {{--@if(count($menu['children']) > 0) <li><i class="fas fa-angle-right rotate"></i> @endif--}}
                                        @include('menu.menu_component', $menu)
                                    @endforeach
                                    <li class="pt-2 text-sm  text-info">
                                        <a data-toggle="modal" data-target="#createMenu" data-menu={{null}}>
                                            <small>
                                                <i class="fas fa-plus mr-2"></i>
                                            </small>
                                            Add New Main Menu
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


@endsection

@section('scripts')
    <script>
        // Treeview Initialization
        $(document).ready(function () {
            $('.treeview').mdbTreeview();
        });

        $('#viewMessage').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var message = button.data('message') // Extract info from data-* attributes
            var menu = button.data('menu')
            var info = button.data('info')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Menu: ' + menu)
            modal.find('.modal-body').text(message)
            // modal.find('.card-text').text(message)
            // modal.find('.card-header').text(menu)
            modal.find('.text-muted').text(info)
        });
        $('#editMessage').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var message = button.data('message') // Extract info from data-* attributes
            var menu = button.data('menu')
            var info = button.data('info')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Menu: ' + menu)
            modal.find('textarea#message').val(message)
            // modal.find('.card-text').text(message)
            // modal.find('.card-header').text(menu)
            modal.find('.text-muted').text(info)
        });

        $('#editMenu').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var menu = null;
            if (button.data("menu") !== null)
                menu = button.data("menu")
            var modal = $(this)
            modal.find('.modal-title').text('Edit Menu')
            modal.find('.modal-body input#menu-name').val(menu['name'])
            modal.find('.menu_id').val(menu['id'])
            modal.find('.parent-menu').text(menu['name'])
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
    </script>
@endsection
