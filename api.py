# Imports
import os
from google.cloud import storage
from flask import Flask, request, jsonify
import tensorflow as tf
import numpy as np
from PIL import Image

MODEL_PATH = "model_t2.keras"
BUCKET_NAME = os.environ.get("model-weights676")

def get_model():
    if not os.path.exists(MODEL_PATH):
        print(f"Downloading model from GCS bucket: {BUCKET_NAME}...")
        client = storage.Client()
        bucket = client.bucket(BUCKET_NAME)
        blob = bucket.blob("model.keras")
        blob.download_to_filename(MODEL_PATH)
        print("Model downloaded successfully.")
    
    return tf.keras.models.load_model(MODEL_PATH)

# Load the model into memory
model = get_model()

# Creates Flask application object
app = Flask(__name__)

# Define class names
class_names = ['Acne', 'Bullous', 'Candidiasis', 'Eczema', 'Psoriasis', 'Rosacea', 'Seborrh_Keratosis', 'Warts']

# Creates a route that allows POST requests
@app.route("/predict", methods=['POST'])

# Defines a prediction function to be executed when a POST request is received
def predict_image():

    # Returns "bad request" error if no image is sent in request from Laravel
    if 'photo' not in request.files:
        return jsonify({'error': 'No image was received in request'}), 400

    # Prepares image file and resizes for EfficientNet-B7 architecture
    file = request.files['photo']
    img = Image.open(file.stream).convert('RGB')
    img = img.resize((600, 600))

    # Convert image to a NumPy array for model to execute
    img_array = np.array(img)
    img_array = np.expand_dims(img_array, axis=0)

    # Make prediction
    predictions = model.predict(img_array)
    score = predictions[0]

    # Construct response
    result = {
        'class': class_names[np.argmax(score)],
        'confidence': int(100 * np.max(score))
    }

    return jsonify(result)

# Launch the application on localhost port 8001 (Laravel is running on port 8000)
if __name__ == "__main__":
    app.run(port=8001, debug=True)
