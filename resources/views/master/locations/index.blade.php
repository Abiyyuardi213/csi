@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-900">Master Locations</h1>
                <p class="mt-1 text-sm text-zinc-500">Manage mining pits, stockpiles, and processing locations.</p>
            </div>
            <div class="shrink-0">
                <a href="{{ route('locations.create') }}"
                    class="inline-flex items-center justify-center rounded-lg bg-zinc-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-zinc-700 transition-all">
                    <svg class="-ml-0.5 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.25a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z"
                            clip-rule="evenodd" />
                    </svg>
                    Add Location
                </a>
            </div>
        </div>

        <div class="overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-zinc-500">
                    <thead class="bg-zinc-50 border-b border-zinc-100/50">
                        <tr>
                            <th class="px-6 py-4 font-semibold text-zinc-900">Name</th>
                            <th class="px-6 py-4 font-semibold text-zinc-900">Code</th>
                            <th class="px-6 py-4 font-semibold text-zinc-900">Type</th>
                            <th class="px-6 py-4 font-semibold text-zinc-900">Description</th>
                            <th class="px-6 py-4 font-semibold text-zinc-900 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-100">
                        @forelse($locations as $item)
                            <tr class="group hover:bg-zinc-50/80 transition-colors">
                                <td class="px-6 py-4 font-medium text-zinc-900">{{ $item->name }}</td>
                                <td class="px-6 py-4"><code
                                        class="text-xs bg-zinc-100 px-2 py-1 rounded border border-zinc-200">{{ $item->code }}</code>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">{{ $item->type }}</span>
                                </td>
                                <td class="px-6 py-4 max-w-xs truncate">{{ $item->description }}</td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2 text-zinc-400">
                                        <a href="{{ route('locations.edit', $item->id) }}"
                                            class="rounded-md p-1 hover:text-amber-600 hover:bg-amber-50">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('locations.destroy', $item->id) }}" method="POST"
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
                                <td colspan="5" class="px-6 py-12 text-center text-zinc-400">No locations found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if ($locations->hasPages())
                <div class="border-t border-zinc-200 bg-zinc-50 px-6 py-4">{{ $locations->links() }}</div>
            @endif
        </div>
    </div>
    @include('layouts.partials.delete-script')
@endsection
