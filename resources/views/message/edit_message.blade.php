<div class="modal fade" id="editMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit Message </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('message.edit')}}">
                @csrf
                @method('PUT')
            <div class="modal-body">

                <input class="message-id" type="hidden" name="id" >
                    <div class="form-group row">
                        <label for="message" class="col-form-label ">{{ __('Message') }}</label>
                        <textarea class="form-control ml-2 mr-2" id="message" rows="5" name="message" onkeyup="countChars(this)" > </textarea>
{{--                        <div id="charNum"></div>--}}
                        <small id="charNum" class="smsCounter text-muted mt-1 mr-3 ml-auto">Info</small>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm mb-2 ml-auto">Save</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
