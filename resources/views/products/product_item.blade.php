<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 24-May-20
 * Time: 18:35
 */
?>

@extends('layout.app', ['title' => __(' Manage Product Items')])

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/flags.css')}}">
@endsection

@section('content')
    @include('layouts.headers.header',['title'=>'Product Items'])
    @include('products.modals.items.edit')
    @include('products.modals.items.delete')

    <div class="container-fluid mt--7">

        <div class="card shadow">
            <div class="row">
                <div class="col">

                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="row">
                                    <a href="{{route('entity.view')}}">
                                        <i class="fa fa-2x fa-arrow-left mx-2 mb-1 pb-1"></i>
                                    </a>
                                    <h3 class="mb-0"> <span class="mr-1">{{$product->name}}</span> {{ __(' Product items') }}</h3>
                                </div>
                               </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary text-white"
                                   data-toggle="collapse" data-target="#createSubscriber"
                                   aria-expanded="false" aria-controls="createSubscriber"
                                >{{ __('Add Product Item') }}</a>
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
                                                        <h3 class="mb-0">{{ __('New Product Item') }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{ route('product.item.post') }}"
                                                      autocomplete="off">
                                                    @csrf
                                                    <input type="text" value="{{$product->id}}" name="product_id" hidden>
                                                    <div class="pl-lg-4">
                                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                                            <label class="form-control-label"
                                                                   for="name">{{ __('name') }}</label>
                                                            <div class="input-group">
                                                                <input type="text" name="name" id="name"
                                                                       class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                       placeholder="{{ __('Item name *') }}"
                                                                       value="{{ old('name') }}" required
                                                                       autofocus>
                                                            </div>

                                                            @if ($errors->has('name'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group{{ $errors->has('features') ? ' has-danger' : '' }}">

                                                            <label class="form-control-label"
                                                                   for="features">{{ __('Features') }}</label>
                                                            <div class="input-group">
                                                                <input type="text" name="features" id="features"
                                                                       class="form-control {{ $errors->has('features') ? ' is-invalid' : '' }}"
                                                                       placeholder="{{ __('Item Feature *') }}"
                                                                       value="{{ old('features') }}" required
                                                                       autofocus>
                                                            </div>

                                                            @if ($errors->has('name'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('features') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>


                                                    <div class="form-group{{ $errors->has('size') ? ' has-danger' : '' }}">

                                                        <label class="form-control-label"
                                                               for="size">{{ __('size') }}</label>
                                                        <div class="input-group">
                                                            <input type="text" name="size" id="size"
                                                                   class="form-control {{ $errors->has('size') ? ' is-invalid' : '' }}"
                                                                   placeholder="{{ __('Item Size') }}"
                                                                   value="{{ old('size') }}"
                                                                   autofocus>
                                                        </div>

                                                        @if ($errors->has('size'))
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('size') }}</strong>
                                                                </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">

                                                        <label class="form-control-label"
                                                               for="price">{{ __('price') }}</label>
                                                        <div class="input-group">
                                                            <input type="text" name="price" id="price"
                                                                   class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
                                                                   placeholder="{{ __('Item Price') }}"
                                                                   value="{{ old('price') }}"
                                                                   autofocus>
                                                        </div>

                                                        @if ($errors->has('price'))
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('price') }}</strong>
                                                                </span>
                                                        @endif
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
                    <div class="card-body">
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
                    <table id="entityTypes" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th class="text-center" scope="col">{{ __('Index') }}</th>
                            <th class="text-left" scope="col">{{ __('Name') }}</th>
                            <th class="text-left" scope="col">{{ __('Features') }}</th>
                            <th class="text-left" scope="col">{{ __('Size') }}</th>
                            <th class="text-left" scope="col">{{ __('Price') }}</th>
                            <th class="text-right" scope="col" class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($product->productItems as $productItem)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-left">
                                    {{ $productItem->name }}
                                </td>
                                <td class="text-left">
                                    {{ $productItem->features }}
                                </td>
                                <td class="text-left">
                                    {{ $productItem->price }}
                                </td>
                                <td class="text-left">
                                    {{ $productItem->size }}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item"
                                               data-toggle="modal" data-target="#editProductItem"
                                               data-product_item="{{$productItem}}">{{ __('Edit') }}</a>
                                            <a class="dropdown-item" data-toggle="modal"
                                               data-target="#deleteProductItem"
                                               data-product_item="{{$productItem}}">
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
            $('#entityTypes').DataTable({
                "pagingType": "simple_numbers" // "simple" option for 'Previous' and 'Next' buttons only
            });
            $('.dataTables_length').addClass('bs-select');
        });

        $('#editProductItem').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var productItem = button.data('product_item')

            var modal = $(this)
            modal.find('.modal-title').text('Edit Product Itemss ')
            modal.find('.product-item-id').val(productItem['id'])
            modal.find('.product-item-name').val(productItem['name'])
            modal.find('.product-item-features').val(productItem['features'])
            modal.find('.product-item-size').val(productItem['size'])
            modal.find('.product-item-price').val(productItem['price'])
        });

        $('#deleteProductItem').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var productItem = button.data('product_item')

            var modal = $(this)
            modal.find('.modal-title').text('Delete Entity Type')
            modal.find('.id').val(productItem['id'])
            modal.find('.modal-body').text('Are you sure you want to delete product item '+ productItem['name'] +' ?')
        });
    </script>
@endsection


