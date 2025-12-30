@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900">Master Employees</h1>
                <p class="mt-1 text-sm text-zinc-500">Personnel management including operators and staff.</p>
            </div>
            <div class="shrink-0">
                <a href="{{ route('employees.create') }}"
                    class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-zinc-700 transition-all">
                    Register New Employee
                </a>
            </div>
        </div>

        <div class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-zinc-500">
                    <thead class="bg-zinc-50 border-b border-zinc-100/50">
                        <tr>
                            <th class="px-6 py-4 font-semibold text-zinc-900">NIK</th>
                            <th class="px-6 py-4 font-semibold text-zinc-900">Name</th>
                            <th class="px-6 py-4 font-semibold text-zinc-900">Position</th>
                            <th class="px-6 py-4 font-semibold text-zinc-900">Department</th>
                            <th class="px-6 py-4 font-semibold text-zinc-900 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-100">
                        @forelse($employees as $item)
                            <tr class="group hover:bg-zinc-50/80 transition-colors">
                                <td class="px-6 py-4 font-mono font-medium text-zinc-900">{{ $item->nik }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="h-8 w-8 rounded-full bg-zinc-200 flex items-center justify-center text-xs font-bold text-zinc-600">
                                            {{ substr($item->name, 0, 2) }}
                                        </div>
                                        <div>
                                            <div class="font-medium text-zinc-900">{{ $item->name }}</div>
                                            <div class="text-xs text-zinc-400">{{ $item->phone ?? 'No Phone' }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center rounded-full bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-600/20">{{ $item->position }}</span>
                                </td>
                                <td class="px-6 py-4 text-zinc-600">{{ $item->department ?? '-' }}</td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2 text-zinc-400">
                                        <a href="{{ route('employees.edit', $item->id) }}"
                                            class="rounded-md p-1 hover:text-amber-600 hover:bg-amber-50">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('employees.destroy', $item->id) }}" method="POST"
                                            class="inline-block delete-form" data-name="{{ $item->name }}">
                                            @csrf @method('DELETE')
                                            <button type="submit"
                                                class="rounded-md p-1 hover:text-red-600 hover:bg-red-50"><svg
                                                    class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center text-zinc-400">No employees found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if ($employees->hasPages())
                <div class="border-t border-zinc-200 bg-zinc-50 px-6 py-4">{{ $employees->links() }}</div>
            @endif
        </div>
    </div>
    @include('layouts.partials.delete-script')
@endsection
