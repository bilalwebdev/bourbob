<ul
    class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
    <li class="mr-2">
        <a href="{{ route('dashboard.bourbons.edit', $bourbon->slug) }}" aria-current="page"
            class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300  @if (Route::currentRouteName() == 'dashboard.bourbons.edit') bg-white dark:bg-darkmode-600 @endif ">Bourbon
            Info</a>
    </li>
    <li class="mr-2">
        <a href="{{ route('dashboard.bourbons.edit.properties', $bourbon->slug) }}"
            class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300 @if (Route::currentRouteName() == 'dashboard.bourbons.edit.properties') bg-white dark:bg-darkmode-600 @endif">Bourbon
            Properties</a>
    </li>
    <li class="mr-2">
        <a href="{{ route('dashboard.bourbons.edit.gallery', $bourbon->slug) }}"
            class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300 @if (Route::currentRouteName() == 'dashboard.bourbons.edit.gallery') bg-white dark:bg-darkmode-600 @endif" >Gallery</a>
    </li>

</ul>
