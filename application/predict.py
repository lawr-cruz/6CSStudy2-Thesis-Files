import numpy as np
from flask import Flask, request, jsonify
from keras.models import Sequential
from keras.layers import LSTM, Dense

# Initialize the Flask app
app = Flask(__name__)

# Load or define the LSTM model
def create_lstm_model():
    model = Sequential()
    model.add(LSTM(50, activation='relu', input_shape=(3, 1)))
    model.add(Dense(1))
    model.compile(optimizer='adam', loss='mse')
    return model

# A placeholder for your LSTM model
lstm_model = create_lstm_model()

# Train the LSTM model (you would normally load a pre-trained model here)
# lstm_model.fit(...)

@app.route('/predict/file_path', , methods=['POST'])
def predict(uploaded_file_path):
    data = uploaded_file_path.toJson()  # Expecting input to be in JSON format
    X = np.array(data['input']).reshape((1, 3, 1))  # Reshape as necessary
    prediction = lstm_model.predict(X)
    return jsonify({'prediction': prediction.tolist()})

if __name__ == "__main__":
    app.run(debug=True)
