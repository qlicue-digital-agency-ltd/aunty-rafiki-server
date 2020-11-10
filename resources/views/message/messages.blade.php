<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 07-Dec-19
 * Time: 17:27
 */
?>
@extends('layout.app', ['class' => 'bg-default'])
@section('styles')
    <!-- MDBootstrap Datatables  -->
    <link href="{{asset('MDB/css/addons/datatables.min.css')}}" rel="stylesheet">
    {{--    <!-- Argon CSS -->--}}
    {{--    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">--}}
@endsection
@section('content')
    @include('message.view_message')
    @include('message.edit_message')
    @include('message.delete_message')
    @include('layouts.headers.header',['title'=>'Messages'])

    <div class="col">

        <div class="card bg-gradient-secondary mt--7 ">
            <div class="card-body">


                <table id="dtBasicExample" class="table table-bordered  table-striped  table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm"> MENU</th>
                        <th class="th-sm"> MESSAGE</th>
                        <th class="th-sm"> COUNT</th>
                        <th class="th-sm"> ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{$message->menus()->get()->first()['name']}}</td>
                            <td>{{  $message['message']}}</td>
                            <td>{{ intdiv (strlen($message['message']) ,160 ) + 1  }} sms</td>
                            <td>

                                    <a data-toggle="modal" data-target="#viewMessage"
                                       data-message="{{$message['message']}}"
                                       data-menu="{{$message->menus()->get()->first()['name']}}"
                                       data-info="{{strlen($message->message)}} Characters,
                                        {{ intdiv (strlen($message['message']) ,160 ) + 1  }} sms">
                                        <i class="fas fa-eye text-success" aria-hidden="true"></i>
                                    </a>

                                    <a data-toggle="modal" data-target="#editMessage"
                                       data-message="{{$message}}"
                                       data-menu="{{$message->menus()->get()->first()['name']}}"
                                       data-info="{{strlen($message->message)}} Characters,
                                        {{ intdiv (strlen($message->message) ,160 ) + 1  }} sms ">
                                        <i class="fas fa-pen text-primary p-2" aria-hidden="true"></i>
                                    </a>
                                    <a data-toggle="modal" data-target="#deleteMessage"
                                       data-message="{{$message}}"
                                       data-menu="{{$message->menus()->get()->first()['name']}}">
                                        <i class="fas fa-trash-alt text-danger " aria-hidden="true"></i>
                                    </a>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th> MENU</th>
                        <th> MESSAGE</th>
                        <th> COUNT</th>
                        <th class="th-sm"> ACTIONS</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="{{asset('MDB/js/addons/datatables.min.js')}}"></script>
    <script>

        // Basic example
        $(document).ready(function () {
            $('#dtBasicExample').DataTable({
                "pagingType": "simple_numbers" // "simple" option for 'Previous' and 'Next' buttons only
            });
            $('.dataTables_length').addClass('bs-select');
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
//            var info = button.data('info')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Menu: ' + menu)
            modal.find('.message-id').val(message['id'])
            modal.find('textarea#message').val(message['message'])
            // modal.find('.card-text').text(message)
            // modal.find('.card-header').text(menu)
//            modal.find('.text-muted').text(info)
        });
        $('#deleteMessage').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var message = button.data('message') // Extract info from data-* attributes
            var menu = button.data('menu')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Delete Message !' )
            modal.find('.messageToDelete').text(message['message'])
//            modal.find('textarea#message').val(message['message'])
            modal.find('.message-id').val(message['id'])
            // modal.find('.card-text').text(message)
            // modal.find('.card-header').text(menu)
//            modal.find('.text-muted').text(info)
        });
        function deleteMessage(url) {
            // event.event.preventDefault();


            boot4.confirm({
                msg: "Are you sure you want to delete this message",
                title: "Delete Message",
                callback: function (result) {
                    if (result) {
                        var data = {"_token": "{{ csrf_token() }}", "_method": "DELETE"};
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': '{{csrf_token()}}'
                            }
                        });
                        $.ajax({
                            url: ""+url,
                            type: "DELETE",
                            data: JSON.stringify(data),
                            cache: false,
                            contentType: 'application/json; charset=utf-8',
                            processData: false,
                            success: function (response) {
                                console.log('Deleted successfully !' + response['message']);
                                if (response['success']){
                                    {{--{{Request::session()->put('msg','Message deleted')}}--}}
                                        window.location.href = '{{route('messages')}}';
                                }else{
                                    {{--{{Request::session()->put('error', 'Deletion failed')}}--}}
                                        window.location.href = '{{route('messages')}}';
                                }

                            },
                            error: function (request, status, error) {
                                console.log('Error Occurred !' + request.responseText);
                            }
                        });

                    } else {
                        console.log("cancel");
                    }
                }
            });
        }

    </script>
@endsection
