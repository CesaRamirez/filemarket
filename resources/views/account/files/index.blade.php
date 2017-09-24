@extends('account.layouts.default')

@section('account.content')
    <h1 class="title">Your files</h1>
    @if ($files->count())
      @each('account.partials._file', $files, 'file')
    @else
      <p>You hace no files.</p>
    @endif
@endsection
