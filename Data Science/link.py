# Dataset Name:Winequality-red.csv
# Dataset Link:http:http://archive.ics.uci.edu/ml/machine-learning-databases/wine-quality/winequality-red.csv
# Download data set from above link

# Set B-1). Import Dataset from above link.

import pandas as pd
from sklearn.preprocessing import *
df = pd.read_csv("winequality-red.csv")
print(df)
