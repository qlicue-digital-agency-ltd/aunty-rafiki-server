
<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 23-May-20
 * Time: 13:51
 */
?>

@extends('layout.app', ['title' => __(' Entity Page')])



@section('content')

    {{--@include('products.modals.product_item.create_product_item',['title'=>"Create Product "])--}}
    @include('products.modals.items.show_product_items',['title'=>"Show Product "])
    {{--@include('products.modals.product.edit',['productTypes'=>$productTypes])--}}
    {{--@include('products.modals.delete')--}}
    {{--@include('entities.modals.entity.edit',['entity'=>$entity, 'entityTypes'=>$entityTypes])--}}


    <div class="col">

        <div class="header bg-gradient-mobile_afya pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="card">
                        <div class="card-header">
                            <div class="row justify-content-center">
                                <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6 col-12">
                                    <div class="view overlay">
                                        <img src="{{ $entity->logo }}" onerror="this.onerror=null; this.src='{{asset('icons/empty.png')}}'; this.alt='Logo not set' "  class="img-fluid" alt="Entity Logo">
                                    </div>

                                </div>
                                <div class="col-xl-10 col-lg-9 col-md-7 col-sm-6 col-12">
                                    <div class="row">
                                        <p class="font-weight-bold"><h1 class=" text-primary">{{$entity->name}}</h1></p>
                                    </div>
                                    <div class="row">
                                        <p class="font-weight-bold"> <h1 class="text-dark mr-1" >Type:</h1> <h1 class=" text-primary">{{$entity->entityType->name}}</h1></p>
                                    </div>
                                    <div class="row">
                                        <p class="font-weight-bold"> <h1 class="text-dark mr-1" >Contacts: </h1> <h1 class=" text-primary">{{$entity->contacts}}</h1></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-xl-10 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Products') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive p-4">
                            <table id="entityTypes" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th class="text-center" scope="col">{{ __('Index') }}</th>
                                    <th class="text-left" scope="col">{{ __('Name') }}</th>
                                    <th class="text-left" scope="col">{{ __('Product Type') }}</th>
                                    <th class="text-left" scope="col">{{__('Items')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($entity->products as $product)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-left">
                                            {{ $product->name }}
                                        </td>
                                        <td class="text-left">
                                            {{ $product->productType->name }}
                                        </td>
                                        <td class="text-left">

                                            <small class=" text-purple">

                                                <a class="btn btn-secondary my-1 py-1 px-2 btn-sm @if(count($product->productItems)< 1) disabled @endif"
                                                   data-toggle="modal" data-target="#showProductItems" data-product="{{$product}}" data-items="{{$product->productItems}}"
                                                   aria-expanded="false" aria-controls="showProductItems">
                                                    <i class="fa fas fa-eye mr-1"></i>    @if(count($product->productItems) >1) {{count($product->productItems)}} items @elseif(count($product->productItems) === 1) {{count($product->productItems)}} item @else no items @endif
                                                </a>
                                            </small>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
            $('#entityTypes').DataTable({
                "pagingType": "simple_numbers" // "simple" option for 'Previous' and 'Next' buttons only
            });
            $('.dataTables_length').addClass('bs-select');
        });

        $('#createProductItem').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var product = button.data('product')

            var modal = $(this)
            modal.find('.modal-title').text('Product: ' + product['name'])
            modal.find('#product_id').val(product['id'])
        });

        $('#showProductItems').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var product = button.data('product')
            var productItems = button.data('items');
            var modal = $(this)
            modal.find('.modal-title').text( product['name'] + ' Product Items')

//            var tr = document.createElement('tr');
//            var td = document.createElement('td');
//            td.text = 'Item';
//            tr.innerHTML.appendChild(td);


//            console.log(productItems);
            var tableBody = "";
            productItems.forEach(function (productItem,i){
                tableBody += "<tr> <td>" + (i+1) + "</td> <td>" +productItem['name'] + "</td> <td>" + productItem['features'] +"</td> <td> action </td></tr>";
                console.log(productItem['name'])
            })

            document.getElementById("tableBody").innerHTML = tableBody; //"<tr> <td>1</td> <td>productItems</td> <td>Features</td> <td> action </td></tr>";
//            modal.find('#tableBody').innerHTML = "<tr> <td>2</td> <td>name</td> <td>Features</td> </tr>";
        });

        $('#editProduct').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var product = button.data('product')
            var productType = button.data('product_type')

            var modal = $(this)
            modal.find('.modal-title').text('Edit Product')
            modal.find('.product-id').val(product['id'])
            modal.find('.product-name').val(product['name'])
            modal.find('.product-type').val(productType['id'])
        });

        $('#deleteProduct').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var product = button.data('product')

            var modal = $(this)
            modal.find('.modal-title').text('Delete Product');
            modal.find('.product-item-id').val(product['id'])
            modal.find('.modal-body').text('Are you sure you want to delete ' + product['name'] + '?')

        });
    </script>
@endsection
