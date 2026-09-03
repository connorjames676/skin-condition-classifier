<!-- This file contains the view for displaying the rosacea information page -->

<x-layouts.app :title="__('Rosacea')">
    <div class="flex h-103 w-full flex-1 flex-col gap-4">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="text-4xl mb-4">Web-Based Skin Condition Classification System</flux:heading>
            <flux:separator class="mb-5"/>

            <flux:heading size="xl" class="mb-5">Analysis Complete!</flux:heading>

            <flux:callout class="mb-4 w-269" variant="warning" icon="exclamation-circle" heading="DISCLAIMER: This analysis was performed by AI, which can make 
                mistakes. Please consult with a dermatologist if you are worried or if symptoms are severe." />

            <flux:text size="xl" class="mb-2">The model has detected&nbsp;&nbsp;&nbsp;
                <flux:button variant="primary" color="blue" href="https://www.nhs.uk/conditions/rosacea/" icon:trailing="arrow-up-right">
                    {{ $prediction }}
                </flux:button> 
                &nbsp;&nbsp;&nbsp;with a confidence score of {{ $confidence }}%
            </flux:text>

            <flux:text color="green">Click the blue button above to go directly to the NHS rosacea page!</flux:text>

            <flux:separator class="my-4" variant="subtle"/>

            <flux:heading size="xl" class="mb-2">What is Rosacea?</flux:heading>

            <flux:text class="mb-1">
                Rosacea is a common, chronic skin condition that primarily affects the face, causing reddened skin and a rash, usually on the nose or cheeks. 
                Symptoms include feeling a burning or stining sensation which come and go and can be triggered by various factors, including sun exposure, stress, hot or cold weather, spicy foods, alcohol, and 
                certain skincare products. Rosacea is more common in women with lighter skin, however it can also affect men where symptoms can be more severe.
                Patients are most commonly adults, between the age of 30 and 60, however rosacea can also affect younger people and children, although this is 
                rare.
            </flux:text>
        </div>
    </div>

    <!-- Showcases 3 images of examples of rosacea -->
    <div class="grid auto-rows-min gap-4 md:grid-cols-3 mb-3">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/rosacea1.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/rosacea2.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/rosacea3.avif') }}" class="w-full h-full object-cover">
        </div>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Commonly Misdiagnosed Conditions</flux:heading>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/acne/">Acne</a>
            : Both rosacea and acne can cause red bumps on the face, but rosacea typically does not involve blackheads or whiteheads, which are common in acne.
        </flux:text>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/atopic-eczema/">Eczema</a>
            : Can cause itchy, sensitive, red skin on the face, which can be mistaken for rosacea but eczema is typically drier, itchier and more patchy.
        </flux:text>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/psoriasis/">Psoriasis</a>
            : When psoriasis affects the face, it can cause red, scaly patches that may be confused with rosacea, but psoriasis typically has a more defined 
            border and is often accompanied by silvery scales.
        </flux:text>
        <flux:text class="mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/lupus/">Lupus</a>
            : Both lupus and rosacea can cause a red rash on the face, but lupus often forms with a butterfly-shaped rash, and may be accompanied by other 
            systemic symptoms such as joint pain and fatigue.
        </flux:text>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Additional Information</flux:heading>
        <flux:text class="mb-2"></flux:text>
        <flux:text>
            The exact cause of rosacea is not fully understood, but it is believed to involve a combination of genetic and environmental factors. There is no 
            cure for rosacea, but it can controlled using gentle skincare products, avoiding known triggers and applying suncreen daily. If you are concerned 
            about your symptoms, or everyday care is not effective, it is important to consult with a dermatologist for a proper diagnosis and more aggresive, 
            medical treatment.
        </flux:text>
    </div>
</x-layouts.app>