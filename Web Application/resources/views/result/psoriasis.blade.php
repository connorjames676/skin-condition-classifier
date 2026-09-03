<!-- This file contains the view for displaying the psoriasis information page -->

<x-layouts.app :title="__('Psoriasis')">
    <div class="flex h-99 w-full flex-1 flex-col gap-4">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="text-4xl mb-4">Web-Based Skin Condition Classification System</flux:heading>
            <flux:separator class="mb-5"/>

            <flux:heading size="xl" class="mb-5">Analysis Complete!</flux:heading>

            <flux:callout class="mb-4 w-269" variant="warning" icon="exclamation-circle" heading="DISCLAIMER: This analysis was performed by AI, which can make 
                mistakes. Please consult with a dermatologist if you are worried or if symptoms are severe." />

            <flux:text size="xl" class="mb-2">The model has detected&nbsp;&nbsp;&nbsp;
                <flux:button variant="primary" color="blue" href="https://www.nhs.uk/conditions/psoriasis/" icon:trailing="arrow-up-right">
                    {{ $prediction }}
                </flux:button> 
                &nbsp;&nbsp;&nbsp;with a confidence score of {{ $confidence }}%
            </flux:text>

            <flux:text color="green">Click the blue button above to go directly to the NHS psoriasis page!</flux:text>

            <flux:separator class="my-4" variant="subtle"/>

            <flux:heading size="xl" class="mb-3">What is Psoriasis?</flux:heading>

            <flux:text class="mb-1">
                Psoriasis is a chronic autoimmune skin condition that causes the rapid buildup of skin cells, leading to itchy, thick, scaly patches on the 
                skin’s surface. The patches tend to be red or pink on lighter skin and can darker brown or grey on darker skin. Psoriasis can affect 
                any part of the body but is most commonly found on the scalp, elbows, knees, and back, affecting people of all ages but typically develops 
                between the ages of 15 and 35.
            </flux:text>
        </div>
    </div>

    <!-- Showcases 3 images of examples of psoriasis -->
    <div class="grid auto-rows-min gap-4 md:grid-cols-3 mb-5">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/psoriasis1.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/psoriasis2.avif') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/psoriasis3.jpg') }}" class="w-full h-full object-cover">
            <img src="{{ asset('') }}">
        </div>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Commonly Misdiagnosed Conditions</flux:heading>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/atopic-eczema/">Eczema</a>
            : Both eczema and psoriasis can cause red, inflamed patches in similar areas of the body. However eczema is typically more itchy, worsening at 
            night, and psoriasis is described as a burning sensation.
        </flux:text>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/dandruff/">Seborrheic dermatitis (Dandruff)</a>
            : A common skin condition causing red, itchy, and greasy, flaky patches on oil-rich areas like the scalp, face, and chest.
        </flux:text>
        <flux:text class="mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/ringworm/">Ringworm (Fungal infection)</a>
            : Ring-shaped, itchy red patches that can appear identical to disc-shaped psoriasis.
        </flux:text>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Additional Information</flux:heading>
        <flux:text class="mb-2"></flux:text>
        <flux:text>
            Psoriasis is not contagious but can be triggered by a combination of immune system dysfunction, genetics, and environmental factors. Common triggers 
            include stress, infections, skin injuries, certain medications, and cold weather. Basic care for psoriasis includes keeping the skin moisturised, 
            avoiding known triggers, and using gentle, fragrance-free skincare products. If you are concerned about your symptoms, or basic care is not 
            effective, it is important to consult with a dermatologist for a proper diagnosis and treatment.
        </flux:text>
    </div>
</x-layouts.app>