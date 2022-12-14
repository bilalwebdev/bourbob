
<div class="flex justify-end mt-2" >
    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center p-3 text-sm font-medium text-white bg-blue-800 rounded-full shadow hover:text-blue-200 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white-" type="button">
        <span class="sr-only">Open user menu</span>
       {{ Auth::user()->name }}
        <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>

    <!-- Dropdown menu -->
    <div id="dropdownAvatarName" class="z-20 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 22431.9px, 0px);">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
          <div class="font-medium "> Admin</div>
          <div class="truncate"> {{ Auth::user()->email }}</div>
        </div>
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
          <li>
            <a href="{{ route('dashboard.profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
          </li>
          <li>
            <a href="{{ route('dashboard.profile.password') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reset Password</a>
          </li>

        </ul>
        <div class="py-1">
          <a href="{{ route('dashboard.logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
        </div>
    </div>
</div>

