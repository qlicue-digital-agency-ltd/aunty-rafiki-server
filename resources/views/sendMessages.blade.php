<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 13-Feb-20
 * Time: 05:00
 */
?>
@extends('layout.app', ['title' => __('Send Messages')])

@section('styles')
    <style>
        .callback {
            display: none;
        }
    </style>
@endsection

@section('content')
    @include('layouts.headers.header',['title'=>'Send Messages'])

    <div class="container-fluid mt--7">

        <div class="card shadow">
            <div class="row">
                <div class="col">

                    <div class="card-header border-0">
                        <div class="row align-items-center">
                         Messages
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

                    <div class="card-body">

                        <div class="row justify-content-center">
                            <div class="col-lg-8 ">


                                {{--Message form--}}
                                <div class="border m-1 p-4 rounded">
                                    <form method="POST" action="{{route('customMessage.post')}}">
                                        @csrf

                                        {{--Switch Send to All or Send to One--}}

                                        <div class="row">
                                            <div class="form-group mt-2">
                                                <div class="form-inline">
                                                    <div class="input-group-prepend">
                                                        <label class="mr-2">Send To</label>
                                                    </div>
                                                    <select class="form-control " name="sendTo">
                                                        <option value="All">All Subscribers ({{$subscribersCount}}) </option>
                                                        <option value="Number">Number</option>
                                                    </select>
                                                </div>


                                            </div>
                                            <div class="form-group callback ml-2 mt--4">
                                                <label for="phone">Enter Number</label>
                                                <input type="tel" placeholder="Enter Phone" class="form-control" name="phone">
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="form-group row">
                                                {{--                            <label for="message" class="col-form-label ">{{ __('Message') }}</label>--}}
                                                <textarea class="form-control ml-2 mr-2" id="message"
                                                          placeholder="{{_('New Message')}}"
                                                          rows="7" name="message" onkeyup="countChars(this)"></textarea>
                                                {{--                        <div id="charNum"></div>--}}
                                                <small id="charNums"
                                                       class="smsCounter text-muted mt-1 mr-3 ml-auto charNumb ">0
                                                    Characters, 0
                                                    sms
                                                </small>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <button type="submit" class="btn btn-primary btn-sm bg-button mb-2 ml-auto">
                                                Send Message
                                            </button>
                                        </div>


                                    </form>
                                    {{--        <div class="card card-body">--}}
                                    {{--            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.--}}
                                    {{--        </div>--}}
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{--                            {{ $users->links() }}--}}
                        </nav>
                    </div>
                </div>
            </div>

        </div>

        {{--@include('layouts.footers.auth')--}}
    </div>
@endsection

@section('scripts')
    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="{{asset('MDB/js/addons/datatables.min.js')}}"></script>
    <script>


        // Basic example
        $(document).ready(function () {
            $('#customers').DataTable({
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


        $('select[name="sendTo"]').on('change', function () {
            if ($(this).val() == "Number") {
                $('.upload').hide();
                $('.callback').show();
            }
            else {
                $('.upload').show();
                $('.callback').hide();
            }
        });

    </script>
@endsection
