@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => ' font-sans border-gray-300 dark:border-gray-700 bg-white/70 dark:text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-xs']) }}>
