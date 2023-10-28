@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.site.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sites.update", [$site->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.site.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $site->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="domain_id">{{ trans('cruds.site.fields.domain') }}</label>
                <select class="form-control select2 {{ $errors->has('domain') ? 'is-invalid' : '' }}" name="domain_id" id="domain_id">
                    @foreach($domains as $id => $entry)
                        <option value="{{ $id }}" {{ (old('domain_id') ? old('domain_id') : $site->domain->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('domain'))
                    <div class="invalid-feedback">
                        {{ $errors->first('domain') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.domain_helper') }}</span>
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