<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-primary text-white px-10']) }}>
    {{ $slot }}
</button>
