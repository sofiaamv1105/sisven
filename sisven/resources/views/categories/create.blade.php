@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Nueva Categoría</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" class="form-control" required>{{ old('description') }}</textarea>
        </div>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection