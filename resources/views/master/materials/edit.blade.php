@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="mb-8">
            <h1 class="text-2xl font-bold tracking-tight text-zinc-950">Edit Material</h1>
        </div>

        <div class="rounded-lg border border-zinc-200 bg-white shadow-sm">
            <form action="{{ route('materials.update', $material->id) }}" method="POST" class="p-6 space-y-6">
                @csrf @method('PUT')

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Material Name</label>
                        <input type="text" name="name" value="{{ $material->name }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            required>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Code</label>
                        <input type="text" name="code" value="{{ $material->code }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-medium text-zinc-950">Type</label>
                    <select name="type"
                        class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                        @foreach (['Coal', 'Overburden', 'Top Soil', 'Mud'] as $t)
                            <option value="{{ $t }}" {{ $material->type == $t ? 'selected' : '' }}>
                                {{ $t }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-medium text-zinc-950">Description</label>
                    <textarea name="description" rows="3"
                        class="flex w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">{{ $material->description }}</textarea>
                </div>

                <div class="flex justify-end gap-4 pt-4">
                    <a href="{{ route('materials.index') }}"
                        class="text-sm font-medium text-zinc-900 hover:underline px-4 py-2">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800">Update
                        Material</button>
                </div>
            </form>
        </div>
    </div>
@endsection
