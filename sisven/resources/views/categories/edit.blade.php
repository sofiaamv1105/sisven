@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Editar Categoría</h2>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $category->name) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" class="form-control" required>{{ old('description', $category->description) }}</textarea>
        </div>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection