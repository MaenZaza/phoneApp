@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Telefoon Lijst</h1>
        <a href="{{ route('phones.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nieuwe Telefoon</a>

        <div class="mt-4">
            <table class="min-w-full bg-white">
                <thead>
                <tr>
                    <th class="py-2">Merk</th>
                    <th class="py-2">Model</th>
                    <th class="py-2">Jaar</th>
                    <th class="py-2">Acties</th>
                </tr>
                </thead>
                <tbody>
                @foreach($phones as $phone)
                    <tr>
                        <td class="py-2">{{ $phone->brand }}</td>
                        <td class="py-2">{{ $phone->model }}</td>
                        <td class="py-2">{{ $phone->year }}</td>
                        <td class="py-2">
                            <a href="{{ route('phones.edit', $phone->id) }}" class="text-blue-500">Bewerken</a>
                            <form action="{{ route('phones.destroy', $phone->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
