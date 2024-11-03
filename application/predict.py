from flask import Flask, request, jsonify
from sklearn.preprocessing import MinMaxScaler
from sklearn.metrics import mean_squared_error, r2_score
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense, LSTM
from tensorflow.keras.optimizers import Nadam
from tensorflow.keras.preprocessing.sequence import TimeseriesGenerator
import pandas as pd
import numpy as np


app = Flask(__name__)

df = pd.read_csv('Score.csv')


df['ID'] = range(1, len(df) + 1)


baseline = df['Baseline'].values.reshape(-1, 1)
post_test = df['Post-test'].values.reshape(-1, 1)


pre_test = df['Pre-test'].values.reshape(-1, 1)

scaler_baseline = MinMaxScaler()
scaler_post_test = MinMaxScaler()
scaler_pre_test = MinMaxScaler()

scaled_baseline = scaler_baseline.fit_transform(baseline)
scaled_post_test = scaler_post_test.fit_transform(post_test)
scaled_pre_test = scaler_pre_test.fit_transform(pre_test)


n_input = 1
n_features = 1
generator = TimeseriesGenerator(scaled_baseline, scaled_post_test, length=n_input, batch_size=5)

model = Sequential()
model.add(LSTM(100, activation='relu', input_shape=(n_input, n_features)))
model.add(Dense(1))
model.compile(optimizer=Nadam(clipnorm=1), loss='mse')



model.fit(generator, epochs=100, verbose=0)



@app.route('/predict/file_path', , methods=['POST'])
def predict(uploaded_file_path):
    data = uploaded_file_path.toJson()
	
    predicted_scores_scaled = []
for i in range(len(pre_test)):
    input_data = scaled_pre_test[i:i+1].reshape((1, n_input, n_features))
    predicted_score = model.predict(input_data, verbose=0)
    predicted_scores_scaled.append(predicted_score[0][0])


predicted_scores = scaler_post_test.inverse_transform(np.array(predicted_scores_scaled).reshape(-1, 1))


df['Predicted Post-Test'] = predicted_scores
df['Predicted Post-Test'] = df['Predicted Post-Test'].round(3)


mse = mean_squared_error(post_test, predicted_scores).round(3)
rmse = np.sqrt(mse).round(3)
r2 = r2_score(post_test, predicted_scores).round(3)

print("Predicted Post-Test Scores:")
print(df[['Baseline', 'ID','Pre-test','Predicted Post-Test', 'Post-test']].to_string(index=False))

print("\nMean Squared Error (MSE):", mse)
print("Root Mean Squared Error (RMSE): ",rmse)
print("R-squared:", r2)
    return jsonify({'predicted_scores)': prediction.tolist()})

if __name__ == "__main__":
    app.run(debug=True)
