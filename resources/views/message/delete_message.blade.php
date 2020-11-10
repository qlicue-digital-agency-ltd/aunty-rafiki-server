<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 23-Dec-19
 * Time: 06:01
 */
?>

<div class="modal fade" id="deleteMessage" tabindex="-1" role="dialog" aria-labelledby="deleteMessageLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMessageLabel"> Edit Message </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('message.delete')}}">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <input class="message-id" type="hidden" name="id" >

                    <div class="form-group row">
                        {{--<label for="message" class="col-form-label ">{{ __('Message') }}</label>--}}
                        {{--<textarea class="form-control ml-2 mr-2" id="message" rows="5" name="message" onkeyup="countChar(this)" > </textarea>--}}
                        {{--                        <div id="charNum"></div>--}}
                        <small id="messageToDelete" class="messageToDelete text-muted mt-1 mr-3 ml-auto">Message</small>
                    </div>
                    <p>Are you sure you want to Delete this Message ?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-sm mb-2 ml-auto">Delete</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

