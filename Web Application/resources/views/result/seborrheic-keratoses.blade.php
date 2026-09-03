<!-- This file contains the view for displaying the seborrheic keratoses information page -->

<x-layouts.app :title="__('Seborrheic Keratoses')">
    <div class="flex h-103 w-full flex-1 flex-col gap-4">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="text-4xl mb-4">Web-Based Skin Condition Classification System</flux:heading>
            <flux:separator class="mb-5"/>

            <flux:heading size="xl" class="mb-5">Analysis Complete!</flux:heading>

            <flux:callout class="mb-4 w-269" variant="warning" icon="exclamation-circle" heading="DISCLAIMER: This analysis was performed by AI, which can make 
                mistakes. Please consult with a dermatologist if you are worried or if symptoms are severe." />

            <flux:text size="xl" class="mb-2">The model has detected&nbsp;&nbsp;&nbsp;
                <flux:button variant="primary" color="blue" href="https://www.newcastle-hospitals.nhs.uk/services/dermatology/patient-dermatology-information-leaflets/seborrhoeic-keratosis-seborrheic-warts/" icon:trailing="arrow-up-right">
                    {{ $prediction }}
                </flux:button> 
                &nbsp;&nbsp;&nbsp;with a confidence score of {{ $confidence }}%
            </flux:text>

            <flux:text color="green">Click the blue button above to go directly to the NHS seborrheic keratosis page!</flux:text>

            <flux:separator class="my-4" variant="subtle"/>

            <flux:heading size="xl" class="mb-3">What is Seborrheic Keratosis?</flux:heading>

            <flux:text class="mb-1">
                Seborrheic keratosis (plural: keratoses) is a very common, non-cancerous skin growth that typically appears as a brown, black, or light tan 
                growth on the face, chest, shoulders, or back. They usually appear as people become older, and are often described to have a waxy or "stuck-on" appearance, a slightly raised or 
                bumpy texture, can vary in size and can be singular or multiple. They are not contagious and are generally harmless, but they can sometimes be 
                itchy which can be helped by keeping the skin moisturised.
            </flux:text>
        </div>
    </div>

    <!-- Showcases 3 images of examples of seborrheic keratoses -->
    <div class="grid auto-rows-min gap-4 md:grid-cols-3 mb-5">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/seborrheic-keratoses1.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/seborrheic-keratoses2.webp') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/seborrheic-keratoses3.jpg') }}" class="w-full h-full object-cover">
        </div>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Commonly Misdiagnosed Conditions</flux:heading>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/melanoma-skin-cancer/">Melanoma</a>
            : A type of skin cancer, that has a similar appearance, but typically shows asymmetry, irregular borders and varied colours, 
            while seborrheic keratoses have the "stuck-on" appearance, waxy look.
        </flux:text>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/warts-and-verrucas/">Warts</a>
            : Both warts and seborrheic keratoses can be raised, rough and have similar textures, but warts are often lighter in colour with tiny black dots. 
        </flux:text>
        <flux:text class="mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/moles/">Moles</a>
            : Can be raised and pigmented, like seborrheic keratoses, but are often smoother and more uniform in colour.
        </flux:text>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Additional Information</flux:heading>
        <flux:text class="mb-2"></flux:text>
        <flux:text>
            It is extremely important to note that while seborrheic keratoses are benign (non-cancerous), if you notice any changes in the growths, such as 
            rapid growth, bleeding, or changes in colour, it is crucial to seek medical advice promptly as mistaking a malignant (cancerous) lesion for a seborrheic 
            keratoses can have serious consequences. Always consult with a dermatologist if you have any concerns about your skin or if you notice any changes 
            in existing growths.
        </flux:text>
    </div>
</x-layouts.app>