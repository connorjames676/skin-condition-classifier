<!-- This file contains the view for displaying the eczema information page -->

<x-layouts.app :title="__('Eczema')">
    <div class="flex h-103 w-full flex-1 flex-col gap-4">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="text-4xl mb-4">Web-Based Skin Condition Classification System</flux:heading>
            <flux:separator class="mb-5"/>

            <flux:heading size="xl" class="mb-5">Analysis Complete!</flux:heading>

            <flux:callout class="mb-4 w-269" variant="warning" icon="exclamation-circle" heading="DISCLAIMER: This analysis was performed by AI, which can make 
                mistakes. Please consult with a dermatologist if you are worried or if symptoms are severe." />

            <flux:text size="xl" class="mb-2">The model has detected&nbsp;&nbsp;&nbsp;
                <flux:button variant="primary" color="blue" href="https://www.nhs.uk/conditions/atopic-eczema/" icon:trailing="arrow-up-right">
                    {{ $prediction }}
                </flux:button> 
                &nbsp;&nbsp;&nbsp;with a confidence score of {{ $confidence }}%
            </flux:text>

            <flux:text color="green">Click the blue button above to go directly to the NHS atopic eczema page!</flux:text>

            <flux:separator class="my-4" variant="subtle"/>

            <flux:heading size="xl" class="mb-3">What is Eczema?</flux:heading>

            <flux:text class="mb-1">
                Eczema (also known as atopic dermatitis) is a common, long-term skin condition that causes inflammation, redness, and itching. It can affect 
                people of all ages but it most commonly begins during childhood, with it flaring up periodically. Common areas affected include the hands, face 
                and neck, along with the insides of the elbows and backs of the knees, however eczema can also affect other parts of the body. Eczema can look 
                different from person to person, but symptoms typically include dry, scaly skin that may crack and bleed, along with red, inflamed patches that 
                can be itchy and uncomfortable.
            </flux:text>
        </div>
    </div>

    <!-- Showcases 3 images of examples of eczema -->
    <div class="grid auto-rows-min gap-4 md:grid-cols-3 mb-5">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/eczema1.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/eczema2.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/eczema3.avif') }}" class="w-full h-full object-cover">
        </div>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Commonly Misdiagnosed Conditions</flux:heading>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/psoriasis/">Psoriasis</a>
            : Both eczema and psoriasis can cause red, inflamed patches in similar areas of the body. However eczema is typically more itchy, worsening at 
            night, and psoriasis is described as a burning sensation.
        </flux:text>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/ringworm/">Ringworm (Fungal infection)</a>
            : Ring-shaped, itchy red patches that can appear identical to disc-shaped eczema.
        </flux:text>
        <flux:text class="mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/bullous-pemphigoid/">Bullous pemphigoid</a>
            : Severe cases of eczema can cause blistering of the skin, which can be mistaken for bullous pemphigoid, an autoimmune condition that causes large, 
            fluid-filled blisters.
        </flux:text>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Additional Information</flux:heading>
        <flux:text class="mb-2"></flux:text>
        <flux:text>
            Eczema is not contagious but can be triggered by various factors, including allergens, irritants, stress, and changes in weather. The exact cause of 
            eczema is not fully understood, but it is believed to involve a combination of genetic and environmental factors. Basic care for eczema includes 
            keeping the skin moisturised, avoiding known triggers, and using gentle, fragrance-free skincare products. If you are concerned about your symptoms, 
            or basic care is not effective, it is important to consult with a dermatologist for aproper diagnosis and treatment.
        </flux:text>
    </div>
</x-layouts.app>