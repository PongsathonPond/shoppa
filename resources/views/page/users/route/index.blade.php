@extends('layouts.user')

@section('contentuser')
<form action="{{ route('test') }}" method="post">
    @csrf
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Multiple files input example</label>
  <input class="form-control" type="file" name="test[]" id="formFileMultiple" multiple>
</div>
<button type="submit">dd</button>
</form>



@endsection
