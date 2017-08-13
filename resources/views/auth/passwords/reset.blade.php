@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    @if (session('status'))
                        <div class="notification is-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Reset Password</p>
                        </div>
                        <form class="form" action="{{ route('password.request') }}" method="post">
                            <div class="card-content column">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="field">
                                    <label for="email" class="label">E-mail Address</label>
                                    <p class="control">
                                        <input type="email" name="email" id="email" placeholder="e.g. cesar@email.com" class="input is-primary">
                                        @if ($errors->has('email'))
                                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </p>
                                </div>
                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <p class="control">
                                        <input type="password" name="password" id="password" class="input is-primary">
                                        @if ($errors->has('password'))
                                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </p>
                                </div>
                                <div class="field">
                                    <label for="password" class="label">Confirm Password</label>
                                    <p class="control">
                                        <input id="password-confirm" type="password" class="input is-primary" name="password_confirmation">
                                    </p>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <div class="card-footer-item">
                                    <button type="submit" class="button is-primary is-outlined">Reset Password</button>
                                </div>
                            </footer>
                        </form>
                </div>
            </div>
        </div>
    </section>
@endsection
