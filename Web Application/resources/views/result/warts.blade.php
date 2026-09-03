<!-- This file contains the view for displaying the warts information page -->

<x-layouts.app :title="__('Warts')">
    <div class="flex h-103 w-full flex-1 flex-col gap-4">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="text-4xl mb-4">Web-Based Skin Condition Classification System</flux:heading>
            <flux:separator class="mb-5"/>

            <flux:heading size="xl" class="mb-5">Analysis Complete!</flux:heading>

            <flux:callout class="mb-4 w-269" variant="warning" icon="exclamation-circle" heading="DISCLAIMER: This analysis was performed by AI, which can make 
                mistakes. Please consult with a dermatologist if you are worried or if symptoms are severe." />

            <flux:text size="xl" class="mb-2">The model has detected&nbsp;&nbsp;&nbsp;
                <flux:button variant="primary" color="blue" href="https://www.nhs.uk/conditions/warts-and-verrucas/" icon:trailing="arrow-up-right">
                    {{ $prediction }}
                </flux:button> 
                &nbsp;&nbsp;&nbsp;with a confidence score of {{ $confidence }}%
            </flux:text>

            <flux:text color="green">Click the blue button above to go directly to the NHS warts and verrucas page!</flux:text>

            <flux:separator class="my-4" variant="subtle"/>

            <flux:heading size="xl" class="mb-3">What are Warts?</flux:heading>

            <flux:text class="mb-1">
                Warts are a common skin condition characterised by small, rough lumps that can appear on the skin and may contain tiny black dots. They are 
                usually harmless, although they can sometimes be painful or itchy and they can spread to other parts of the body or other people by 
                contaminated surfaces or direct skin contact. Common areas to see warts include the hands and fingers, feet (verrucas), knees or elbows, but 
                they can appear anywhere on the body and can affect people of all ages. 
            </flux:text>
        </div>
    </div>

    <!-- Showcases 3 images of examples of warts -->
    <div class="grid auto-rows-min gap-4 md:grid-cols-3 mb-5">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/warts1.webp') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/warts2.webp') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/warts3.jpg') }}" class="w-full h-full object-cover">
        </div>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Commonly Misdiagnosed Conditions</flux:heading>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.newcastle-hospitals.nhs.uk/services/dermatology/patient-dermatology-information-leaflets/seborrhoeic-keratosis-seborrheic-warts/">Seborrheic keratoses</a>
            : Both warts and seborrheic keratoses can be raised, rough and have similar textures, but warts are often lighter in colour with tiny black dots.
        </flux:text>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/moles/">Moles</a>
            : Can be raised and pigmented, like warts, but are often smoother and more uniform in colour, with warts having small black dots.
        </flux:text>
        <flux:text class="mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/skin-tags/">Skin tags</a>
            : Both warts and skin tags can be small, flesh-coloured growths, but skin tags are typically smooth and do not have any dots.
        </flux:text>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Additional Information</flux:heading>
        <flux:text class="mb-2"></flux:text>
        <flux:text>
            Warts are caused by the human papillomavirus (HPV) and are contagious. There exists different types of warts, including common warts, plantar warts 
            on the feet (verrucas), flat warts (often found on the face or legs) and filiform warts, (longer, narrower warts often found on the face). Basic 
            care for warts includes keeping the area clean and dry, avoiding picking or scratching the wart, and using over-the-counter treatments if necessary.
            Warts rarely require seeking medical advice, as they often resolve on their own within a few months to a couple of years. However, if warts are 
            painful, spreading rapidly, or if you're unsure if it's a wart, it's advisable to consult a healthcare professional for proper diagnosis and 
            treatment options.
        </flux:text>
    </div>
</x-layouts.app>