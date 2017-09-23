@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Let's get you ready for selling</p>
                        </div>
                        <form class="form" action="{{ route('register') }}" method="post">
                            <div class="card-content column">
                                {{ csrf_field() }}
                                <div class="field">
                                    <label for="email" class="label">Email</label>
                                    <p class="control">
                                        <input type="email" name="email" id="email" placeholder="e.g. cesar@email.com" class="input {{ $errors->has('email') ? 'is-danger': '' }}" value="{{ old('email') }}">
                                    </p>
                                    @if ($errors->has('email'))
                                        <p class="help is-danger">
                                            {{ $errors->first('email')}}
                                        </p>
                                    @endif
                                </div>
                                <div class="field">
                                    <label for="name" class="label">Name</label>
                                    <p class="control">
                                        <input type="text" name="name" id="name" class="input {{ $errors->has('name') ? 'is-danger': '' }}" placeholder="e.g. Cesar" value="{{ old('name') }}">
                                    </p>
                                    @if ($errors->has('name'))
                                        <p class="help is-danger">
                                            {{ $errors->first('name')}}
                                        </p>
                                    @endif
                                </div>
                                <div class="field">
                                    <label for="password" class="label">Choose a Password</label>
                                    <p class="control">
                                        <input type="password" name="password" id="password" class="input {{ $errors->has('password') ? 'is-danger': '' }}">
                                    </p>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">
                                            {{ $errors->first('password')}}
                                        </p>
                                    @endif
                                </div>
                                <div class="field">
                                    <label for="password-confirm" class="label">Confirm a Password</label>
                                    <p class="control">
                                        <input type="password" name="password_confirmation" id="password-confirm" class="input">
                                    </p>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <div class="card-footer-item">
                                    <button type="submit" name="button" class="button is-primary">Sign Up</button>
                                </div>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
