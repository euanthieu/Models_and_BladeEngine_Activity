@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <table class="min-w-full bg-teal-200 border border-yellow-400 rounded-lg shadow-xl">
            <thead class="bg-pink-600 text-white">
                <tr>
                    <th class="w-1/6 py-3 px-4">ID</th>
                    <th class="w-1/6 py-3 px-4">ISBN</th>
                    <th class="w-1/6 py-3 px-4">Title</th>
                    <th class="w-1/6 py-3 px-4">Author</th>
                    <th class="w-1/6 py-3 px-4">Description</th>
                    <th class="w-1/6 py-3 px-4">Date Published</th>
                </tr>
            </thead>
            <tbody class="text-gray-800">
                @foreach ($books as $book)
                    <tr class="bg-teal-100 hover:bg-teal-300 text-center">
                        <td class="border px-4 py-3">{{ $book->id }}</td>
                        <td class="border px-4 py-3">{{ $book->isbn }}</td>
                        <td class="border px-4 py-3">{{ $book->title }}</td>
                        <td class="border px-4 py-3">{{ $book->author }}</td>
                        <td class="border px-4 py-3">{{ $book->description }}</td>
                        <td class="border px-4 py-3">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
