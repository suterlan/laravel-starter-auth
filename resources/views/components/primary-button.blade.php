<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-indigo-700 dark:bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-300 uppercase tracking-widest hover:bg-blue-700 dark:hover:bg-indigo-800 focus:bg-blue-700 dark:focus:bg-indigo-800 active:bg-blue-700 dark:active:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
