# Set B-2). Rescaling: Normalised the dataset using MinMaxScaler class

from numpy import asarray
from sklearn.preprocessing import MinMaxScaler
# define data
data = pd.read_csv("winequality-red.csv")
print(data)
# define min max scaler
scaler = MinMaxScaler()
# transform data
scaled = scaler.fit_transform(data)
print(scaled)
