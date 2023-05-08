<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-gray-800 border border-transparent font-semibold text-xs uppercase tracking-widest ']) }}>
    {{ $slot }}
</button>
