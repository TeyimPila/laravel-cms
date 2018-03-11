@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Create New User</h1>
            </div>
        </div> <!-- End of header columns-->
        <hr class="m-t-0">

        <div class="columns">
            <div class="column">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    {{method_field('PUT')}}
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="name" class="label">Name:</label>
                        <p class="control">
                            <input value="{{$user->name}}" type="text" class="input is-primary" name="name" id="name">
                        </p>
                    </div>


                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <p class="control">
                            <input value="{{$user->email}}" type="email" class="input is-primary" name="email" id="email">
                        </p>
                    </div>


                    <div class="field">
                        <label for="password" class="label">Password:</label>
                        {{--<b-radio-group v-model="password_options">--}}
                            <div class="field">
                                <b-radio v-model="password_option" name="password_option" native-value="keep">Do Not Change Password</b-radio>
                            </div>
                            <div class="field">
                                <b-radio v-model="password_option" name="password_option" native-value="auto">Auto-Generate New Password</b-radio>
                            </div>
                            <div class="field">
                                <b-radio v-model="password_option" name="password_option" native-value="manual">Manually Set New Password</b-radio>
                                <p class="control">
                                    <input type="password" class="input is-primary" name="password" id="password" v-if="password_option == 'manual'"/>
                                </p>
                            </div>
                        {{--</b-radio-group>--}}
                    </div>

                    <button class="button is-primary is-pulled-right">Save User</button>
                </form>
            </div>
        </div>

    </div> <!-- End of .flex-container -->
@endsection

@section('scripts')
    <script>
        // var app = new Vue({
        //     el: '#app',
        //     data: {
        //         auto_password: true
        //     }
        // });
    </script>
@endsection