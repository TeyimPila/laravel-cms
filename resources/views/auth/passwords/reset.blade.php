@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card has-shadow">
                <div class="card-header ">
                    <h4 class="title m-t-10 m-b-10">Reset Your Password</h4>
                </div>

                <div class="card-content">
                    <form action="{{route('register')}}" method="POST" role="form">
                        <input type="hidden" name="token" value="{{ $token }}">

                        {{csrf_field()}}
                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
                                <input class="input {{$errors->has('email')?'is-danger':'is-primary'}}" type="email"
                                       name="email" id="email"
                                       placeholder="name@example.com" value="{{old('email')}}">
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <p class="control">
                                        <input class="input {{$errors->has('password')?'is-danger':'is-primary'}}"
                                               type="password" name="password" id="password">

                                    </p>
                                    @if($errors->has('password'))
                                        <p class="help is-danger">{{$errors->first('password')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label for="repeatPassword" class="label">Confirm Password</label>
                                    <p class="control">
                                        <input class="input {{$errors->has('password_confirmation')?'is-danger':'is-primary'}}"
                                               type="password" name="password_confirmation" id="repeatPassword">

                                    </p>
                                    @if($errors->has('password_confirmation'))
                                        <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button class="button is-primary is-outlined is-fullwidth">Register</button>
                    </form>
                </div>
            </div>
            <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an
                    Account?</a></h5>
        </div>
    </div>

@endsection
