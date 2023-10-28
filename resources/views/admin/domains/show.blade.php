@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.domain.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.domains.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.domain.fields.id') }}
                        </th>
                        <td>
                            {{ $domain->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.domain.fields.name') }}
                        </th>
                        <td>
                            {{ $domain->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.domain.fields.directory') }}
                        </th>
                        <td>
                            {{ $domain->directory }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.domains.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#domain_sites" role="tab" data-toggle="tab">
                {{ trans('cruds.site.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="domain_sites">
            @includeIf('admin.domains.relationships.domainSites', ['sites' => $domain->domainSites])
        </div>
    </div>
</div>

@endsection