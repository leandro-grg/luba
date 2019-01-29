@extends('luba::projects._master')
@section('page.title', __('luba::titles.project_manage'))
@section('page.subtitle', __('luba::titles.project_manage_description'))
@section('detail')

    <!-- Header -->
    <div class="row align-items-center">
        <div class="col-auto">
            <img src="{{ $project->logo }}" alt="">
        </div>
        <div class="col">
            <h3>{{ $project->title }}</h3>
            <h4>{{ $project->subtitle }}</h4>
        </div>
    </div>

    <!-- Tabs -->
    <luba-tabs :tabs="$project->manageTabs"></luba-tabs>

    <!-- Content -->
    <div class="mt-3">
        @yield('detail.project_management')
    </div>
@stop