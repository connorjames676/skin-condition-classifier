<!-- This file contains the view for displaying the candidiasis information page -->

<x-layouts.app :title="__('Candidiasis')">
    <div class="flex h-98 w-full flex-1 flex-col gap-4">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="text-4xl mb-4">Web-Based Skin Condition Classification System</flux:heading>
            <flux:separator class="mb-5"/>

            <flux:heading size="xl" class="mb-5">Analysis Complete!</flux:heading>

            <flux:callout class="mb-4 w-269" variant="warning" icon="exclamation-circle" heading="DISCLAIMER: This analysis was performed by AI, which can make 
                mistakes. Please consult with a dermatologist if you are worried or if symptoms are severe." />

            <flux:text size="xl" class="mb-2">The model has detected&nbsp;&nbsp;&nbsp;
                <flux:button variant="primary" color="blue" href="https://www.cdc.gov/candidiasis/about/index.html" icon:trailing="arrow-up-right">
                    {{ $prediction }}
                </flux:button> 
                &nbsp;&nbsp;&nbsp;with a confidence score of {{ $confidence }}%
            </flux:text>

            <flux:text color="green">Click the blue button above to go directly to the Centers of Disease Control and Prevention's candidiasis page!</flux:text>

            <flux:separator class="my-4" variant="subtle"/>

            <flux:heading size="xl" class="mb-3">What is Candidiasis?</flux:heading>

            <flux:text class="mb-1">
                Candidiasis, also known as a yeast infection, is a common fungal infection caused by the overgrowth of Candida. It can affect
                various parts of the body, including the mouth, throat, genitals and skin. Candida normally lives harmlessly on the skin and inside the body, 
                but can cause an infection when it overgrows. On the skin, candidiasis can cause red, itchy rashes, with white patches or peeling skin, 
                affecting people of all ages.
            </flux:text>
        </div>
    </div>

    <!-- Showcases 3 images of examples of candidiasis -->
    <div class="grid auto-rows-min gap-4 md:grid-cols-3 mb-5">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/candidiasis1.jpeg') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/candidiasis2.webp') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/candidiasis3.png') }}" class="w-full h-full object-cover">
        </div>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Commonly Misdiagnosed Conditions</flux:heading>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/atopic-eczema/">Eczema</a>
            : Red, itchy skin caused by candidiasis can be mistaken for eczema as they occur in similar areas, however eczema is typically much drier and 
            itchier.
        </flux:text>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/psoriasis/">Psoriasis</a>
            : Both candidiasis and psoriasis can cause red, inflamed patches in skin folds, but psoriasis is typically smoother and more well-defined.
        </flux:text>
        <flux:text class="mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/ringworm/">Ringworm (Fungal infection)</a>
            : Also caused by a fungal infection causing red, scaly skin. However ringworm is ring-shaped with a clear centre, whereas candidiasis
            is moist with no ring pattern.
        </flux:text>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Additional Information</flux:heading>
        <flux:text class="mb-2"></flux:text>
        <flux:text>
            Typical causes of candidiasis include warm, moist environments that promote fungal growth, such as sweaty skin folds, tight clothing, and poor 
            hygiene. It can also be triggered by diabetes, a weakened immune system and antibiotic use. Candidiasis is usually not serious and can be easily 
            treated, however, it can be more serious in people with a weakened immune system. General care includes keeping the affected area clean and dry, 
            and wearing loose-fitting, breathable clothing; trusted guidance is available via the NHS and DermNet. If the rash is spreading, not improving with basic care, or if you have an underlying health 
            condition, it is important to consult with a dermatologist for a proper diagnosis where they may prescribe antifungal creams or powders.
        </flux:text>
    </div>
</x-layouts.app>