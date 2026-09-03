<!-- This file contains the view for displaying the bullous information page -->

<x-layouts.app :title="__('Bullous')">
    <div class="flex h-110 w-full flex-1 flex-col gap-4">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="text-4xl mb-4">Web-Based Skin Condition Classification System</flux:heading>
            <flux:separator class="mb-5"/>

            <flux:heading size="xl" class="mb-5">Analysis Complete!</flux:heading>

            <flux:callout class="mb-4 w-269" variant="warning" icon="exclamation-circle" heading="DISCLAIMER: This analysis was performed by AI, which can make 
                mistakes. Please consult with a dermatologist if you are worried or if symptoms are severe." />

            <flux:text size="xl" class="mb-2">The model has detected&nbsp;&nbsp;&nbsp;
                <flux:button variant="primary" color="blue" href="https://www.nhs.uk/conditions/bullous-pemphigoid/" icon:trailing="arrow-up-right">
                    {{ $prediction }}
                </flux:button> 
                &nbsp;&nbsp;&nbsp;with a confidence score of {{ $confidence }}%
            </flux:text>

            <flux:text color="green">Click the blue button above to go directly to the NHS bullous pemphigoid page!</flux:text>

            <flux:separator class="my-4" variant="subtle"/>

            <flux:heading size="xl" class="mb-3">What is Bullous?</flux:heading>

            <flux:text class="mb-1">
                "Bullous" is a medical term used for conditions that involve bullae, large fluid-filled blisters that form on the skin. Patients often 
                experience itching, redness, and discomfort, usually on the arms, legs or torso and occasionally can affect the mouth or areas of friction, such 
                as the feet. There exists two main types:
            </flux:text>
            <flux:text>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;Bullous pemphigoid is a rare autoimmune disease common in people over 60.
            </flux:text>
            <flux:text>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp;Bullous impetigo is a bacterial skin infection that mostly affects infants and young children.
            </flux:text>
        </div>
    </div>

    <!-- Showcases 3 images of examples of bullous -->
    <div class="grid auto-rows-min gap-4 md:grid-cols-3 mb-5">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/bullous1.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/bullous2.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/bullous3.jpg') }}" class="w-full h-full object-cover">
        </div>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Commonly Misdiagnosed Conditions</flux:heading>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/atopic-eczema/">Eczema</a>
            : Early stages of bullous pemphigoid can resemble eczema, with red, itchy patches of inflamed skin, before blisters develop.
        </flux:text>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/hives/">Urticaria (Hives)</a>
            : A rash of raised bumps or patches in many shapes and sizes that can cause severe itching and looks visually similar to the early stages of bullous pemphigoid.
        </flux:text>
        <flux:text class="mb-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/burns-and-scalds/">Burns</a>
            : Large blisters in patients, particularly in elderly patients who cannot provide a history, can be misidentified as scald burns.
        </flux:text>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Additional Information</flux:heading>
        <flux:text class="mb-2"></flux:text>
        <flux:text>
            Blistering of the skin can be caused by a variety of conditions, including autoimmune diseases (bullous pemphigoid), infections (bullous impetigo), 
            allergic reactions, and physical trauma, such as friction or scald burns. It is important to seek medical attention if you develop blisters, 
            especially if they are large, painful, and accompanied by fragile skin that may tear easily. Treatment depends on its underlying cause which can be 
            determined by a healthcare professional; basic treatment includes keeping the area clean and dry, avoiding popping blisters and protecting the skin 
            with dressings.
        </flux:text>
    </div>
</x-layouts.app>