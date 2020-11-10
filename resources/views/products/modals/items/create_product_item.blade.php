<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 24-Apr-20
 * Time: 12:21
 */
?>

<div class="modal fade" id="createProductItem" tabindex="-1" role="dialog" aria-labelledby="editSubscriberLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSubscriberLabel"> Add New Product Item </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('product.item.post')}}">
                    @csrf
                    <input name="product_id" type="text" value="" id="product_id" hidden>
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

                    <div class="form-group{{ $errors->has('features') ? ' has-danger' : '' }}">

                        <label class="form-control-label"
                               for="features">{{ __('features') }}</label>
                        <div class="input-group">
                            <input type="text" name="features" id="features"
                                   class="form-control {{ $errors->has('features') ? ' is-invalid' : '' }}"
                                   placeholder="{{ __(' Features ') }}"
                                   value="{{ old('features') }}" required
                                   autofocus>
                        </div>

                        @if ($errors->has('features'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('features') }}</strong>
                                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">

                        <label class="form-control-label"
                               for="price">{{ __('Price') }}</label>
                        <div class="input-group">
                            <input type="text" name="price" id="price"
                                   class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
                                   placeholder="{{ __(' price ') }}"
                                   value="{{ old('price') }}"
                                   autofocus>
                        </div>

                        @if ($errors->has('price'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('size') ? ' has-danger' : '' }}">

                        <label class="form-control-label"
                               for="size">{{ __('size') }}</label>
                        <div class="input-group">
                            <input type="text" name="size" id="size"
                                   class="form-control {{ $errors->has('size') ? ' is-invalid' : '' }}"
                                   placeholder="{{ __(' Size ') }}"
                                   value="{{ old('size') }}"
                                   autofocus>
                        </div>

                        @if ($errors->has('size'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('size') }}</strong>
                                        </span>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-4">{{ __('Add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
