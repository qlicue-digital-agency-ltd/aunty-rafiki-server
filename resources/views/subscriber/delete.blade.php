<div class="modal fade" id="deleteSubscriber" tabindex="-1" role="dialog" aria-labelledby="deleteSubscriberLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title" id="deleteSubscriberLabel"> Delete Subscriber </h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="col-xl-12 order-xl-1 ">
                            <div class="card bg-secondary shadow">
                                <div class="card-header bg-white border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                                <h3 class="mb-0">{{ __('Delete Subscriber') }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('subscriber.delete') }}"
                                          autocomplete="off">
                                        @csrf
                                        @method('DELETE')
                                        <div class="pl-lg-4">
                                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                                <label class="form-control-label"
                                                       for="phoneToEdit">{{ __('Phone') }}</label>
                                                <input type="tel" name="phone" id="phoneToDelete"
                                                       class="phone form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                       value="{{ old('phone') }}" readonly>
                                            </div>
                                            <input type="hidden" name="id" class="subscriber-id" value="88">
                                            <p class="text-danger">Are you sure you want to delete this number ?</p>
                                            <div class="text-right">

                                                <button  data-dismiss="modal"
                                                        class="btn btn-success mt-4">{{ __('Cancel') }}</button>
                                                <button type="submit"
                                                        class="btn btn-danger mt-4">{{ __('Delete') }}</button>
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
