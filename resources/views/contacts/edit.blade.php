@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Contact aanpassen</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="first_name">Voornaam:</label>
                <input type="text" class="form-control" name="first_name" value="{{ $contact->first_name }}" />
            </div>

            <div class="form-group">
                <label for="last_name">Achternaam:</label>
                <input type="text" class="form-control" name="last_name" value="{{ $contact->last_name }}" />
            </div>

            <div class="form-group">
              <label for="company_id">Bedrijf:</label>
              <select class="form-control" name="company_id" id="company_id">
              <option value="none" selected disabled hidden>
              Selecteer een bedrijf indien gewenst </option>
                @foreach($companies as $c_id => $name)
                
                  <option value="{{$c_id}}" 
                  @if ($contact->company_id==$c_id)
                  selected
                  @endif
                  >{{ $name}}</option>
                @endforeach
              </select>
          </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{ $contact->email }}" />
            </div>
            <div class="form-group">
                <label for="city">Woonplaats:</label>
                <input type="text" class="form-control" name="city" value="{{ $contact->city }}" />
            </div>
            <div class="form-group">
                <label for="country">Land:</label>
                <input type="text" class="form-control" name="country" value="{{ $contact->country }}" />
            </div>
            <div class="form-group">
                <label for="job_title">Functie:</label>
                <input type="text" class="form-control" name="job_title" value="{{ $contact->job_title }}" />
            </div>
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </form>
    </div>
</div>
@endsection
