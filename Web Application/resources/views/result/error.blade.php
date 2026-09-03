<!-- This file contains the view for displaying the analysis error page when the API is unavailable -->

<x-layouts.app :title="__('Analysis Error')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="mb-4 text-4xl">Web-Based Skin Condition Classification System</flux:heading>
            <flux:separator class="mb-5" />

            <flux:heading size="xl" class="mb-5">Analysis Unavailable</flux:heading>

            <flux:callout
                class="mb-4 w-90"
                variant="danger"
                icon="exclamation-triangle"
                heading="There was an error connecting to the API."
            />

            <flux:button :href="route('dashboard')" variant="primary" color="emerald" wire:navigate>
                Please click here to try again
            </flux:button>
        </div>
    </div>
</x-layouts.app>
