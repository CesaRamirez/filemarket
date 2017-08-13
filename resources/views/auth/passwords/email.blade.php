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
                        <form class="form" action="{{ route('password.email') }}" method="post">
                            <div class="card-content column">
                                {{ csrf_field() }}
                                <div class="field">
                                    <label for="email" class="label">E-Mail Address</label>
                                    <p class="control">
                                        <input type="email" name="email" id="email" placeholder="e.g. cesar@email.com" class="input is-primary">
                                    </p>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <div class="card-footer-item">
                                    <button type="submit" class="button is-primary is-outlined">Send Password Reset Link</button>
                                </div>
                            </footer>
                        </form>
                </div>
            </div>
        </div>
    </section>
@endsection
