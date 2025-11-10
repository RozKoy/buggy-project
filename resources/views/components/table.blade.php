@props([
    'id' => '',
    'headers' => [],
    'pagination' => null,
])
<div class="relative overflow-x-auto">
    <!-- Search Form -->
    <table id="{{ $id }}" class="w-full text-sm text-left rtl:text-right text-black-500 dark:text-black-400">
        <thead class="text-xs text-black-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-black-400">
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
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-700">
                    Showing <span class="font-medium">{{ $pagination->firstItem() }}</span> to <span class="font-medium">{{ $pagination->lastItem() }}</span> of <span class="font-medium">{{ $pagination->total() }}</span>
                    results
                </div>
                <nav aria-label="Page navigation">
                    <ul class="inline-flex -space-x-px text-sm">
                        @if ($pagination->onFirstPage())
                            <li>
                                <span class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-400 bg-white border border-gray-300 rounded-l-lg cursor-not-allowed">Previous</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $pagination->previousPageUrl() }}" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                            </li>
                        @endif

                        @foreach ($pagination->getUrlRange(1, $pagination->lastPage()) as $page => $url)
                            @if ($page == $pagination->currentPage())
                                <li>
                                    <span class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">{{ $page }}</span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        @if ($pagination->hasMorePages())
                            <li>
                                <a href="{{ $pagination->nextPageUrl() }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                            </li>
                        @else
                            <li>
                                <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-400 bg-white border border-gray-300 rounded-r-lg cursor-not-allowed">Next</span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    @endif
</div>
