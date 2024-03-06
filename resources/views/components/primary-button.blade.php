<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn hover:bg-[#011f4b] bg-[#002D74] text-center  w-full py-2 rounded-md font-bold text-white']) }}>
    {{ $slot }}
</button>
