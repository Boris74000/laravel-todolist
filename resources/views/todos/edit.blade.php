@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Modification de la todo <span class="badge badge-dark">#{{ $todo->id }}</span></h4>
        </div>
        <div class="card-body">
            <form action="{{ route('todos.update', $todo->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Titre</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp"
                           value="{{ old('name', $todo->name) }}">
                    <small id="nameHelp" class="form-text text-muted">Entrez le titre de votre todo.</small>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="description" aria-describedby="nameHelp"
                           value="{{ old('description', $todo->description) }}">
                </div>
                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" name="done" id="done" {{ $todo->done ? 'checked' : '' }}
                    value=1>
                    <label class="form-check-label" for="done">Done ?</label>
                </div>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>

@endsection
