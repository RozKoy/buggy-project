@props([
    'id' => '',
    'headers' => [],
    'pagination' => null,
])
<div class="relative overflow-x-auto">
    <!-- Search Form -->
    <table id="{{ $id }}" class="text-black-500 dark:text-black-400 w-full text-left text-sm rtl:text-right">
        <thead class="text-black-700 dark:text-black-400 bg-gray-50 text-xs uppercase dark:bg-gray-700">
            <tr>
                @if (count($headers) > 0)
                    @foreach ($headers as $header)
                        <th scope="col" class="px-6 py-3">
                            {{ $header }}
                        </th>
                    @endforeach
                @endif
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>

    <!-- Pagination -->
    @if (!empty($pagination) && $pagination->hasPages())
        <div class="border-t border-gray-200 bg-gray-50 px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-700">
                    Showing <span class="font-medium">{{ $pagination->firstItem() }}</span> to <span class="font-medium">{{ $pagination->lastItem() }}</span> of <span class="font-medium">{{ $pagination->total() }}</span>
                    results
                </div>
                <nav aria-label="Page navigation">
                    <ul class="inline-flex -space-x-px text-sm">
                        @if ($pagination->onFirstPage())
                            <li>
                                <span class="ml-0 flex h-8 cursor-not-allowed items-center justify-center rounded-l-lg border border-gray-300 bg-white px-3 leading-tight text-gray-400">Previous</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $pagination->previousPageUrl() }}" class="ml-0 flex h-8 items-center justify-center rounded-l-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700">Previous</a>
                            </li>
                        @endif

                        @foreach ($pagination->getUrlRange(1, $pagination->lastPage()) as $page => $url)
                            @if ($page == $pagination->currentPage())
                                <li>
                                    <span class="flex h-8 items-center justify-center border border-gray-300 bg-blue-50 px-3 text-blue-600 hover:bg-blue-100 hover:text-blue-700">{{ $page }}</span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}" class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        @if ($pagination->hasMorePages())
                            <li>
                                <a href="{{ $pagination->nextPageUrl() }}" class="flex h-8 items-center justify-center rounded-r-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700">Next</a>
                            </li>
                        @else
                            <li>
                                <span class="flex h-8 cursor-not-allowed items-center justify-center rounded-r-lg border border-gray-300 bg-white px-3 leading-tight text-gray-400">Next</span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    @endif
</div>
