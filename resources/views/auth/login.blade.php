@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Sign In</p>
                        </div>
                        <form class="form" action="{{ route('login') }}" method="post">
                            <div class="card-content column">
                                {{ csrf_field() }}
                                <div class="field">
                                    <label for="email" class="label">Email</label>
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
                                    <div class="control">
                                        <label for="remember" class="checkout">
                                            <input type="checkbox" name="remember" id="remember" checked>
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <div class="card-footer-item">
                                    <button type="submit" class="button is-primary is-outlined">Sign In</button>
                                </div>
                                <div class="card-footer-item">
                                    <a href="{{ route('password.request')}}">Forgotten your Password?</a>
                                </div>
                            </footer>
                        </form>
                </div>
            </div>
        </div>
    </section>
@endsection
