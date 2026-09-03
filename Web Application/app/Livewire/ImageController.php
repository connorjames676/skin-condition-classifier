<?php

// This file is responsible for handling the image upload and prediction logic.

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Log;

class ImageController extends Component
{
    use WithFileUploads;

    // Validation rules for the uploaded photo
    #[Validate('required|image|max:10240')] // Allows images up to 10MB
    public $photo;

    // Handles the image upload and prediction logic
    public function save()
    {

        $this->validate();

        // Initialise default values for prediction and confidence and to assist in degbugging if the API call fails
        $prediction = 'Error';
        $confidence = 0;

        // Makes an API call to the prediction endpoint with the uploaded photo
        try {
            $response = Http::attach(
                'photo',
                file_get_contents($this->photo->getRealPath()),
                $this->photo->getClientOriginalName()
            )->post('http://127.0.0.1:8001/predict'); // Location of Flask API

            $result = $response->json();

            $prediction = $result['class'] ?? $prediction;
            $confidence = $result['confidence'] ?? $confidence;
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Prediction API error: '.$e->getMessage());
        }

        // Store the uploaded photo in the 'public/photos' directory and reset the photo property for another upload
        $this->photo->store('photos', 'public');
        $this->photo = null;

        // Returns the user to the result information page of the detected condition with a confidence value
        return redirect()->route('result', [
            'prediction' => $prediction,
            'confidence' => $confidence,
        ]);
    }

    // Renders the Livewire component view
    public function render()
    {
        return view('livewire.image-controller');
    }
}
