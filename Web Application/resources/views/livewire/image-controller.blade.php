<!-- This file contains the image controller form for handling image uploads -->

<form wire:submit="save">
    <flux:input type="file" wire:model="photo" label="Upload an image" class="mb-4"/>
    <flux:text class="text-orange-400">This image will be stored and analysed for the detection process.</flux:text>

    <!-- Previews the image with its filename and size prior to uploading -->
    <div class="mt-3 flex flex-col gap-2">
        @if ($photo)
            <div class="flex items-center gap-2 w-200 rounded border mb-3 border-neutral-200 dark:border-neutral-700 p-3">
                <img src="{{ $photo->temporaryUrl() }}" alt="Preview" class="h-72 w-72 rounded object-cover" />
                <div class="flex-1">
                    <p class="font-medium">{{ $photo->getClientOriginalName() }}</p>
                    <p class="text-sm text-neutral-500">{{ number_format($photo->getSize() / 1024, 2) }} KB</p>
                </div>
            </div>
        @endif
    </div>

    <!-- Upload button to submit the image for upload to the CNN -->
    <flux:button type="submit" variant="primary" color="emerald" icon="arrow-down-tray" class="w-200">Upload</flux:button>
</form>