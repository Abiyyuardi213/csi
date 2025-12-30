@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="mb-8">
            <h1 class="text-2xl font-bold tracking-tight text-zinc-950">Add Location</h1>
            <p class="mt-2 text-sm text-zinc-500">Create a new operational location.</p>
        </div>

        <div class="rounded-lg border border-zinc-200 bg-white shadow-sm">
            <form action="{{ route('locations.store') }}" method="POST" class="p-6 space-y-6">
                @csrf

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Location Name</label>
                        <input type="text" name="name"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            required placeholder="e.g. Pit Alpha">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Code</label>
                        <input type="text" name="code"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            required placeholder="e.g. PIT-01">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-medium text-zinc-950">Type</label>
                    <select name="type"
                        class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                        <option value="Pit">Pit (Mining Area)</option>
                        <option value="Stockpile">Stockpile (Storage)</option>
                        <option value="Crusher">Crusher (Processing)</option>
                        <option value="Port">Port (Shipping)</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-medium text-zinc-950">Description</label>
                    <textarea name="description" rows="3"
                        class="flex w-full rounded-md border border-zinc-200 px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"></textarea>
                </div>

                <div class="flex justify-end gap-4 pt-4">
                    <a href="{{ route('locations.index') }}"
                        class="text-sm font-medium text-zinc-900 hover:underline px-4 py-2">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800">Create
                        Location</button>
                </div>
            </form>
        </div>
    </div>
@endsection
