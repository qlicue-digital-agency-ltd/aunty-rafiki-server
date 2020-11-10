<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 19-Nov-19
 * Time: 18:44
 */
?>

@extends('layout.app')
@section('styles')
    <!-- MDBootstrap Datatables  -->
    <link href="{{asset('MDB/css/addons/datatables.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    @include('layouts.headers.header',['title'=>'Analytics'])
    <div class="col mt--7">
        <div class="card bg-gradient-secondary">
            <div class="card-body">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">PHONE NUMBER

                        </th>
                        <th class="th-sm">COST

                        </th>
                        <th class="th-sm">STATUS

                        </th>
                        <th class="th-sm">VIEW

                        </th>
                        <th class="th-sm">DATE

                        </th>
                        <th class="th-sm">MESSAGE INFO

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($records as $record)
                        <tr>
                            <td>{{$record['number']}}</td>
                            <td>{{$record['cost']}}</td>
                            <td class="font-weight-bold">{{$record['status']}}</td>
                            <td class="text-center">
                                @if($record->message_id != 0)
                                    <a data-toggle="modal" data-target="#exampleModal"
                                       data-message="{{$record->message()->first()['message']}}"
                                       data-menu="{{$record->menu()->get()->first()['name']}}"
                                       @if($record->message()->first())
                                       data-info="{{strlen($record->message()->first()->message)}} Characters,
            {{ intdiv (strlen($record->message()->first()->message) ,160 ) + 1  }} sms ">
                                        @else
                                            data-info=" 0 Characters, 0 sms ">
                                        @endif
                                        <i class="fas fa-eye text-success" aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a data-toggle="modal" data-target="#exampleModal"
                                       data-message=" Calender Message, "
                                       data-menu=" Kalenda Yangu"
                                            data-info=" N/A Characters, N/A sms ">

                                        <i class="fas fa-eye text-success" aria-hidden="true"></i>
                                    </a>
                                @endif

                            </td>
                            <td>{{$record['created_at']}}</td>
                            <td>{{$record['sms']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>PHONE NUMBER
                        </th>
                        <th>COST
                        </th>
                        <th>STATUS
                        </th>
                        <th>VIEW
                        </th>
                        <th>DATE
                        </th>
                        <th>MESSAGE INFO
                        </th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>

    {{--    Modal Begins--}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Details </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            Menu
                        </div>
                        <div class="card-body">
                            <p class="card-text"> Message </p>
                        </div>
                        <div class="card-footer text-sm">
                            <small class="text-muted">Info</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
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

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var message = button.data('message') // Extract info from data-* attributes
            var menu = button.data('menu')
            var info = button.data('info')
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Menu: ' + menu)
            modal.find('.modal-body input').val(message)
            modal.find('.card-text').text(message)
            modal.find('.card-header').text(menu)
            modal.find('.text-muted').text(info)
        });

    </script>

@endsection
