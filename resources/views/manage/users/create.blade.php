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
                <form action="{{route('users.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="name" class="label">Name:</label>
                        <p class="control">
                            <input type="text" class="input is-primary" name="name" id="name">
                        </p>
                    </div>


                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <p class="control">
                            <input type="email" class="input is-primary" name="email" id="email">
                        </p>
                    </div>


                    <div class="field">
                        <label for="password" class="label">Password:</label>
                        <p class="control">
                            <input type="password" class="input is-primary" name="password" id="password"
                                   v-if="!auto_password">
                            <b-checkbox name="auto_generate" class="m-t-15"
                                        v-model="auto_password">Auto Generate Password
                            </b-checkbox>
                        </p>
                    </div>

                    <button class="button is-primary is-pulled-right">Create User</button>
                </form>
            </div>
        </div>

    </div> <!-- End of .flex-container -->
@endsection

<script>
    window.onload = function () {
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true
            }
        });
    }
</script>
