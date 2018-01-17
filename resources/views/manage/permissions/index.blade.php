@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Roles and Permissions</h1>
            </div>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary btn-major-action" >
                    <i class="fa fa-user-plus m-r-10"></i> Create New Permissions
                </a>
            </div>
        </div>
    </div>
@endsection