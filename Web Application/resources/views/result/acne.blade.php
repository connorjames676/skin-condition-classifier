<!-- This file contains the view for displaying the acne information page -->

<x-layouts.app :title="__('Acne')">
    <div class="flex h-100 w-full flex-1 flex-col gap-4">
        <div class="relative h-full flex-1 overflow-hidden">
            <flux:heading size="xl" level="1" class="text-4xl mb-4">Web-Based Skin Condition Classification System</flux:heading>
            <flux:separator class="mb-5"/>

            <flux:heading size="xl" class="mb-5">Analysis Complete!</flux:heading>

            <flux:callout class="mb-4 w-269" variant="warning" icon="exclamation-circle" heading="DISCLAIMER: This analysis was performed by AI, which can make 
                mistakes. Please consult with a dermatologist if you are worried or if symptoms are severe." />

            <flux:text size="xl" class="mb-2">The model has detected&nbsp;&nbsp;&nbsp;
                <flux:button variant="primary" color="blue" href="https://www.nhs.uk/conditions/acne/" icon:trailing="arrow-up-right">
                    {{ $prediction }}
                </flux:button> 
                &nbsp;&nbsp;&nbsp;with a confidence score of {{ $confidence }}%
            </flux:text>

            <flux:text color="green">Click the blue button above to go directly to the NHS acne page!</flux:text>

            <flux:separator class="my-6" variant="subtle"/>

            <flux:heading size="xl" class="mb-3">What is Acne?</flux:heading>

            <flux:text>
                Acne is a common skin condition that commonly affects teenagers, although it can affect anyone at any age. It occurs when hair follicles 
                become clogged by oil and dead skin cells, affecting the face, back and chest.
            </flux:text>
        </div>
    </div>

    <!-- Showcases 3 images of examples of acne -->
    <div class="grid auto-rows-min gap-4 md:grid-cols-3 mb-5">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/acne2.jpg') }}">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/acne3.jpg') }}">
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/acne5.jpg') }}">
        </div>
    </div>

    <div>
        <flux:heading size="xl" class="mb-1">Commonly Misdiagnosed Conditions</flux:heading>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/rosacea/">Rosacea</a>
            : Causes red bumps similar to pimples but are causes by inflammation, not clogged-pores.
        </flux:text>
        <flux:text class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/ingrown-hairs/">Folliculitis (Ingrown Hairs)</a>
            : Small bumps that can be red and itchy, caused by follicles being infected by yeast or bacteria. 
        </flux:text>
        <flux:text class="mb-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://www.nhs.uk/conditions/keratosis-pilaris/">Keratosis Pilaris</a>
            : Common, harmless skin condition that causes dry, rough patches and tiny bumps, often on the upper arms, thighs, cheeks or buttocks.
        </flux:text>
    </div>

    <div>
        <flux:heading size="xl" class="mb-3">Additional Information</flux:heading>
        <flux:text class="mb-2"></flux:text>
        <flux:text>
            Acne can be caused by a variety of factors, including hormonal changes, genetics, certain medications, and lifestyle factors such as diet and 
            stress. It is important to maintain a good skincare routine, avoid picking or squeezing pimples, and seek attention with a dermatologist if acne is 
            severe or persistent.
        </flux:text>
    </div>
</x-layouts.app>
