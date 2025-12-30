@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="mb-8">
            <h1 class="text-2xl font-bold tracking-tight text-zinc-950">Edit Equipment</h1>
        </div>

        <div class="rounded-lg border border-zinc-200 bg-white shadow-sm">
            <form action="{{ route('equipment.update', $equipment->id) }}" method="POST" class="p-6 space-y-6">
                @csrf @method('PUT')

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Unit Code (Hull No)</label>
                        <input type="text" name="unit_code" value="{{ $equipment->unit_code }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            required>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Model</label>
                        <input type="text" name="model" value="{{ $equipment->model }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            required>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Type</label>
                        <select name="type"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                            @foreach (['Excavator', 'Dump Truck', 'Dozer', 'Grader', 'Light Vehicle'] as $t)
                                <option value="{{ $t }}" {{ $equipment->type == $t ? 'selected' : '' }}>
                                    {{ $t }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Capacity (Tons)</label>
                        <input type="number" step="0.01" name="capacity" value="{{ $equipment->capacity }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-medium text-zinc-950">Status</label>
                    <select name="status"
                        class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                        @foreach (['Active', 'Breakdown', 'Maintenance', 'Standby'] as $s)
                            <option value="{{ $s }}" {{ $equipment->status == $s ? 'selected' : '' }}>
                                {{ $s }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-end gap-4 pt-4">
                    <a href="{{ route('equipment.index') }}"
                        class="text-sm font-medium text-zinc-900 hover:underline px-4 py-2">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800">Update
                        Equipment</button>
                </div>
            </form>
        </div>
    </div>
@endsection
