<!-- This file contains the dashboard view for the application. -->

<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="text-4xl mb-4">Web-Based Skin Condition Classification System</flux:heading>

            <flux:separator class="mb-4"/>

            <livewire:image-controller />
        </div>
    </div>
</x-layouts.app>
