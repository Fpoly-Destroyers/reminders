<div class="h-screen p-4 flex justify-between items-start">
    {{-- Render component tuy theo route --}}
    <div class="w-full">
        @livewire($content['component'], ['slug' => $content['data']['slug'] ?? null], key($content['component'] . '-' . ($content['data']['slug'] ?? '')))
    </div>
</div>
