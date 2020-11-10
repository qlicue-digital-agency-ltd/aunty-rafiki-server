<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 24-May-20
 * Time: 22:49
 */
?>


<div class="modal fade" id="editEntity" tabindex="-1" role="dialog" aria-labelledby="editEntityLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEntityLabel"> Edit Entity </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <img id="logo-preview" style="max-height: 120px" src="{{$entity->logo}}"
                         onerror="this.onerror=null; this.src='{{asset('icons/empty.png')}}'; this.alt='Logo not set' "
                         class="img-fluid mb-2" alt="Entity Logo"/>
                    <form role="form" method="POST" action="{{ route('entity.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="text" name="id" value="{{$entity->id}}" hidden>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="logoDescription">Logo</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="logo" class="custom-file-input" id="logo"
                                       aria-describedby="logoDescription" onchange="readURL(this);">
                                <label class="custom-file-label" for="logo">Choose Image</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">

                                <input id="entityName" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Name') }}" type="text" name="name" value="{{ $entity->name }}"
                                       required autofocus>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('contacts') ? ' is-invalid' : '' }}"
                                       placeholder="{{ __('Phone') }}" type="tel" value="{{$entity->contacts}}" name="contacts" required>
                            </div>
                            @if ($errors->has('contacts'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('contacts') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('entity_type') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <select class="form-control{{ $errors->has('entity_type_id') ? ' is-invalid' : '' }}"
                                        name="entity_type_id" required>
                                    <option>Select Entity Type</option>
                                    @foreach($entityTypes as $entityType)
                                        <option @if($entityType->id === $entity->entity_type_id) selected @endif value="{{$entityType->id}}">{{$entityType->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('entity_type'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('entity_type') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('location') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}"
                                       value="{{$entity->location}}"
                                       placeholder="{{ __('Location') }}" type="text" name="location">
                            </div>
                            @if ($errors->has('location'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4 ">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logo-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            else {
                $('#logo-preview').attr('src', '{{ $entity->logo }}');
            }
        }
    </script>
</div>