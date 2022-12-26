# Set B-5). Binarizing Data using we use the Binarizer class (Using a binary threshold, it is possible to transform our
# data by marking the values above it 1 and those equal to or below it, 0)

import pandas as pd
import numpy as np
from sklearn import preprocessing
import scipy.stats as s
df = pd.read_csv("winequality-red.csv")
d_binarized = preprocessing.Binarizer(threshold=5).transform(df)
print("\n Binarized Data")
print("--------------------")
print(d_binarized)
