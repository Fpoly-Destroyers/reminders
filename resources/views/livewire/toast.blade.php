<div class="toast-box">
    @if ($type && $title && $message)
        <div class="toast-message absolute right-5 top-6 max-w-full overflow-hidden">
            <div
                class="animate-toast-slide transition duration-1000 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded shadow-lg">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded"
                    style="background-color: {{ $bgColor }}">
                    <span class="material-symbols-outlined" style="color: {{ $textColor }}">
                        {{ $icon }}
                    </span>
                </div>
                <div class="px-6 text-xs">
                    <p class="font-semibold">{{ $title }}</p>
                    <p class="font-normal">{{ $message }}</p>
                </div>
            </div>
        </div>
    @endif
</div>
