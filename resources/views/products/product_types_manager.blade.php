<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 20-Apr-20
 * Time: 22:14
 */
?>

@extends('layout.app', ['title' => __(' Manage Types of Products')])

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/flags.css')}}">
@endsection

@section('content')
    @include('layouts.headers.header',['title'=>'Product Types Manager'])

    @include('products.modals.types.edit')
    @include('products.modals.types.delete')

    <div class="container-fluid mt--7">

        <div class="card shadow">
            <div class="row">
                <div class="col">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Product Types') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary text-white"
                                   data-toggle="collapse" data-target="#createSubscriber"
                                   aria-expanded="false" aria-controls="createSubscriber"
                                >{{ __('Add Product Type') }}</a>
                            </div>
                        </div>
                        <div class="collapse" id="createSubscriber">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-md-8 col-lg-6 col-sm-10">
                                    <div class="col-xl-12 order-xl-1 ">
                                        <div class="card bg-secondary shadow">
                                            <div class="card-header bg-white border-0">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h3 class="mb-0">{{ __('New Product Type') }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{ route('product.type.create') }}"
                                                      autocomplete="off">
                                                    @csrf
                                                    <div class="pl-lg-4">
                                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                                            <label class="form-control-label"
                                                                   for="name">{{ __('name') }}</label>
                                                            <div class="input-group">
                                                                <input type="text" name="name" id="name"
                                                                       class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                       placeholder="{{ __('Type name') }}"
                                                                       value="{{ old('name') }}" required
                                                                       autofocus>
                                                            </div>

                                                            @if ($errors->has('name'))
                                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                                            @endif
                                                        </div>

                                                    </div>


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

                <div class="table-responsive p-4">
                    <table id="productTypes" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th class="text-center" scope="col">{{ __('Index') }}</th>
                            <th class="text-left" scope="col">{{ __('Name') }}</th>
                            <th class="text-right" scope="col" class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($productTypes as $productType)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-left">
                                    {{ $productType->name }}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item"
                                                   data-toggle="modal" data-target="#editProductType"
                                                   data-product_type="{{$productType}}">{{ __('Edit') }}</a>
                                                <a class="dropdown-item" data-toggle="modal"
                                                   data-target="#deleteProductType"
                                                   data-product_type="{{$productType}}">
                                                    {{ __('Delete') }}
                                                </a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{--                            {{ $users->links() }}--}}
                    </nav>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.footers.auth')
    </div>
@endsection

@section('scripts')
    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="{{asset('MDB/js/addons/datatables.min.js')}}"></script>
    <script>

        // Basic example
        $(document).ready(function () {
            $('#productTypes').DataTable({
                "pagingType": "simple_numbers" // "simple" option for 'Previous' and 'Next' buttons only
            });
            $('.dataTables_length').addClass('bs-select');
        });

        $('#editProductType').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var productType = button.data('product_type')

            var modal = $(this)
            modal.find('.modal-title').text('Edit Product Type')
            modal.find('.id').val(productType['id'])
            modal.find('.name').val(productType['name'])
        });

        $('#deleteProductType').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var productType = button.data('product_type')

            var modal = $(this)
            modal.find('.modal-title').text('Delete Product Type')
            modal.find('.id').val(productType['id'])
            modal.find('.modal-body').text('Are you sure you want to delete Product Type '+ productType['name'] +' ?')
        });
    </script>
@endsection
