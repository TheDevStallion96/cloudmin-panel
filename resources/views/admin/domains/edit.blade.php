@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.domain.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.domains.update", [$domain->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.domain.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $domain->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.domain.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="directory">{{ trans('cruds.domain.fields.directory') }}</label>
                <input class="form-control {{ $errors->has('directory') ? 'is-invalid' : '' }}" type="text" name="directory" id="directory" value="{{ old('directory', $domain->directory) }}">
                @if($errors->has('directory'))
                    <div class="invalid-feedback">
                        {{ $errors->first('directory') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.domain.fields.directory_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection