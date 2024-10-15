@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-700/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-700/50 transition duration-200 ease-in-out w-full text-sm border-slate-300/60 focus:border-gray-300 focus:ring-0  shadow-sm rounded-md placeholder:text-slate-400/90 dark:placeholder:text-slate-500/80 py-3 ']) !!}>
