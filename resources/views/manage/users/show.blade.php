@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h6 class="subtitle">View User Details</h6>
            </div>

            <div class="column">
                <a href="{{route('users.edit', $user->id)}}" class="button is-primary btn-major-action">
                    <i class="fa fa-user m-r-10"></i> Edit User
                </a>
            </div>
        </div> <!-- End of header columns-->



        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <div class="field">
                    {{--<div class="field">--}}
                        <label for="name" class="label">Name:</label>
                        <pre>{{$user->name}}</pre>
                    </div>
                {{--</div>--}}


                {{--<div class="field">--}}
                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <pre>{{$user->email}}</pre>
                    </div>
                {{--</div>--}}

            </div>
        </div>

    </div>
@endsection
