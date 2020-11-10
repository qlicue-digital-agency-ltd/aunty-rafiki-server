<div class="modal fade" id="editSubscriber" tabindex="-1" role="dialog" aria-labelledby="editSubscriberLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSubscriberLabel"> Edit Subscriber </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="col-xl-12 order-xl-1 ">
                            <div class="card bg-secondary shadow">
                                <div class="card-header bg-white border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">{{ __('Edit Subscriber') }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('subscriber.edit') }}"
                                          autocomplete="off">
                                        @csrf
                                        @method('PUT')
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                                <label class="form-control-label"
                                                       for="phoneToEdit">{{ __('Phone') }}</label>
                                                    <input type="tel" name="phone" id="phoneToEdit"
                                                           class="phone form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                           value="{{ old('phone') }}" required autofocus>

                                                    @if ($errors->has('phone'))
                                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                            <input type="hidden" name="id" class="subscriber-id" value="88">
                                            <div class="text-center">
                                                <button type="submit"
                                                        class="btn btn-success mt-4">{{ __('Save') }}</button>
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
    </div>
</div>



