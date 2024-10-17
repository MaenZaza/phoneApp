@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Telefoon Bewerken</h1>

        <form action="{{ route('phones.update', $phone->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="brand" class="block">Merk:</label>
                <input type="text" name="brand" class="border p-2 w-full" value="{{ $phone->brand }}" required>
            </div>

            <div class="mb-4">
                <label for="model" class="block">Model:</label>
                <input type="text" name="model" class="border p-2 w-full" value="{{ $phone->model }}" required>
            </div>

            <div class="mb-4">
                <label for="year" class="block">Jaar:</label>
                <input type="number" name="year" class="border p-2 w-full" value="{{ $phone->year }}" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
        </form>
    </div>
@endsection
