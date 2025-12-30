@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="mb-8">
            <h1 class="text-2xl font-bold tracking-tight text-zinc-950">Add Equipment</h1>
        </div>

        <div class="rounded-lg border border-zinc-200 bg-white shadow-sm">
            <form action="{{ route('equipment.store') }}" method="POST" class="p-6 space-y-6">
                @csrf

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Unit Code (Hull No)</label>
                        <input type="text" name="unit_code"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            required placeholder="e.g. DT-001">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Model</label>
                        <input type="text" name="model"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            required placeholder="e.g. CAT 777E">
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Type</label>
                        <select name="type"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                            <option value="Excavator">Excavator</option>
                            <option value="Dump Truck">Dump Truck</option>
                            <option value="Dozer">Dozer</option>
                            <option value="Grader">Grader</option>
                            <option value="Light Vehicle">Light Vehicle</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Capacity (Tons)</label>
                        <input type="number" step="0.01" name="capacity"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            placeholder="e.g. 100">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-medium text-zinc-950">Status</label>
                    <select name="status"
                        class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                        <option value="Active">Active</option>
                        <option value="Breakdown">Breakdown</option>
                        <option value="Maintenance">Maintenance</option>
                        <option value="Standby">Standby</option>
                    </select>
                </div>

                <div class="flex justify-end gap-4 pt-4">
                    <a href="{{ route('equipment.index') }}"
                        class="text-sm font-medium text-zinc-900 hover:underline px-4 py-2">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800">Add
                        Equipment</button>
                </div>
            </form>
        </div>
    </div>
@endsection
