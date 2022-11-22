@extends('layouts.base')

@section('content')
{{-- HTML --}}
<form>
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Naam</label>
      <input type="text" class="form-control" id="name">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Beschrijving</label>
        <input type="text" class="form-control" id="name">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection