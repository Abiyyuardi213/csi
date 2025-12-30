@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="mb-8">
            <h1 class="text-2xl font-bold tracking-tight text-zinc-950">Edit Employee</h1>
        </div>

        <div class="rounded-lg border border-zinc-200 bg-white shadow-sm">
            <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="p-6 space-y-6">
                @csrf @method('PUT')

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Employee Name</label>
                        <input type="text" name="name" value="{{ $employee->name }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            required>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">NIK (ID Number)</label>
                        <input type="text" name="nik" value="{{ $employee->nik }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950"
                            required>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Position</label>
                        <select name="position"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                            @foreach (['Operator', 'Mechanic', 'Staff', 'Supervisor', 'Manager'] as $p)
                                <option value="{{ $p }}" {{ $employee->position == $p ? 'selected' : '' }}>
                                    {{ $p }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Department</label>
                        <input type="text" name="department" value="{{ $employee->department }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Phone Number</label>
                        <input type="text" name="phone" value="{{ $employee->phone }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-medium text-zinc-950">Join Date</label>
                        <input type="date" name="join_date"
                            value="{{ $employee->join_date ? $employee->join_date->format('Y-m-d') : '' }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950">
                    </div>
                </div>

                <div class="flex justify-end gap-4 pt-4">
                    <a href="{{ route('employees.index') }}"
                        class="text-sm font-medium text-zinc-900 hover:underline px-4 py-2">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-white hover:bg-zinc-800">Update
                        Employee</button>
                </div>
            </form>
        </div>
    </div>
@endsection
