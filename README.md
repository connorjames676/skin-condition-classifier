# Web-Based Skin Condition Classification System

A final-year project that classifies uploaded skin-condition images using an EfficientNet-B7 model.

## Tools Used

- Laravel and Livewire web application
- Flask prediction API
- TensorFlow / EfficientNet-B7
- Python, NumPy and Pillow

## Project structure

- `Web Application/` — Laravel user interface
- `api.py` — Flask API serving model predictions
- `Model.ipynb` — model training and evaluation Jupyter notebook
- `requirements.txt` - text file listing required Python dependencies for execution

## Running locally

1. Install the Python dependencies:

   ```bash
   python3 -m pip install -r requirements.txt

2. Start the prediction API:

   ```bash
   python3 api.py

3. In a separate terminal, start the Laravel application:
 
   ```bash
   cd "Web Application"
   composer install
   npm install
   npm run build
   php artisan serve
