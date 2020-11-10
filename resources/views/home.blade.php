@extends('layout.app')

@section('content')
    {{--@include('layouts.headers.cards',['messages'=>$messages,'subscribers'=>$subscribers])--}}
<div class="col">

    <div class="header bg-gradient-mobile_afya pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
               <span class="text-white text-lg"> MobiAd </span>
                <br/>
                <span class="text-white">Bills</span>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="col">
                <div class="row">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('home','extracted')}}" type="button" class="btn @if(request()->is('home/extracted')) btn-primary  @else btn-outline-primary @endif">Un Extracted</a>
                        <a href="{{route('home')}}" type="button" class="btn @if(request()->is('home') || request()->is('home/all')) btn-primary  @else btn-outline-primary @endif">All</a>
                        <a href="{{route('home','unpaid')}}" type="button" class="btn @if(request()->is('home/unpaid') ) btn-primary  @else btn-outline-primary @endif">Unpaid</a>
                        <a href="{{route('home','paid')}}" type="button" class="btn @if(request()->is('home/paid')) btn-primary  @else btn-outline-primary @endif">Paid</a>


                    </div>

                    @if(request()->is('home/extracted'))
                   <a href="{{route('bills.export')}}" type="button" class="btn btn-primary ml-auto">Download</a>
                   @endif()
               
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col">
                    <table id="bills" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">{{ __('Phone') }}</th>
                            <th scope="col">{{ __('Package') }}</th>
                            <th scope="col">{{ __('Caller Tune') }}</th>
                            <th scope="col">{{ __('Transaction Number') }}</th>
                            <th scope="col">{{ __('Amount') }}</th>
                            <th scope="col">{{ __('Status') }}</th>
                        </tr>
                        </thead>
                        @foreach($bills as $bill)
                            <tr>
                                <td> {{$bill->phone_number}}</td>
                                <td> {{$bill->package}}</td>
                                <td> {{$bill->huduma_ya_muito}}</td>
                                <td> {{$bill->transaction_number}}</td>
                                <td> {{$bill->charges}}</td>
                                <td> {{$bill->status}}</td>
                                {{--<td> {{$bill->is_extracted}}</td>--}}
                            </tr>
                        @endforeach
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection


@section('scripts')
    <script type="text/javascript" src="{{asset('MDB/js/addons/datatables.min.js')}}"></script>
    <script>
        $('#bills').DataTable({
            "pagingType": "simple_numbers" // "simple" option for 'Previous' and 'Next' buttons only
        });
        $('.dataTables_length').addClass('bs-select');
    </script>
@endsection
