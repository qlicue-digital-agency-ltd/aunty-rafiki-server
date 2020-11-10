<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 07-Dec-19
 * Time: 17:27
 */
?>
@extends('layout/app')
@section('styles')
    <!-- MDBootstrap Datatables  -->
    <link href="{{asset('MDB/css/addons/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    @include('message.view_message')
    @include('message.edit_message')
    @include('message.delete_message')
    @include('layouts.headers.header',['title'=> 'Messages for menu "'. $menu->name.'"'])
    <div class="col  mt--7">
{{--        <p class="mt-4 ml-4"><span class="text-uppercase font-weight-bold text-white">Menu:{{$menu->name}}</span></p>--}}
<div class="card bg-gradient-secondary">
    <div class="card-body">
        <div class="row">
            <button class="btn btn-sm btn-red rounded-pill" type="button" data-toggle="collapse" data-target="#addMenuMessage"
                    aria-expanded="false" aria-controls="addMenuMessage">
                <i class="fas fa-plus-circle"></i>
                Add Message
            </button>
        </div>

        <div class="collapse" id="addMenuMessage">
            <div class="border m-1 p-4 rounded">
                <form method="POST" action="{{route('message.create',$menu->id)}}">
                    @csrf
                    <div class="">
                        <div class="form-group row">
                            {{--                            <label for="message" class="col-form-label ">{{ __('Message') }}</label>--}}
                            <textarea class="form-control ml-2 mr-2" id="message" placeholder="{{_('New Message')}}"
                                      rows="5" name="message" onkeyup="countChars(this)"></textarea>
                            {{--                        <div id="charNum"></div>--}}
                            <small id="charNums" class="smsCounter text-muted mt-1 mr-3 ml-auto charNumb ">0 Characters, 0
                                sms</small>
                        </div>

                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-sm mb-2 ml-auto">Add Menu Message</button>
                    </div>


                </form>
                {{--        <div class="card card-body">--}}
                {{--            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.--}}
                {{--        </div>--}}
            </div>
        </div>


        {{--    <p><small>{{_('Messages')}}</small></p>--}}
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
                <!--            <th class="th-sm"> MENU</th>-->
                <th class="th-sm"> MESSAGE</th>
                <th class="th-sm"> COUNT</th>
                <th class="th-sm"> ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                <!--            <td>{{$message->menus()->get()->first()['name']}}</td>-->
                    <td>{{  $message['message']}}</td>
                    <td>{{ intdiv (strlen($message['message']) ,160 ) + 1  }} sms</td>
                    <td >
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
                            <i class="fas fa-trash-alt text-danger" aria-hidden="true"></i>
                        </a>

                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <!--            <th> MENU</th>-->
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
                "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
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
            var info = button.data('info')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Menu: ' + menu)
            modal.find('textarea#message').val(message['message'])
            modal.find('.message-id').val(message['id'])
            // modal.find('.card-text').text(message)
            // modal.find('.card-header').text(menu)
            modal.find('.text-muted').text(info)
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
    </script>
@endsection
