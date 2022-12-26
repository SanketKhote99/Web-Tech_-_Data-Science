# Set B-4). Normalizing Data ( rescale each observation to a length of 1 (a unit norm). For this, use the Normalizer class.)

import pandas as pd
import numpy as np
from sklearn import preprocessing
import scipy.stats as s
df = pd.read_csv("winequality-red.csv")
dn = preprocessing.normalize(df)
print("\n L1 Normalized Data")
print("--------------------")
print(dn.round(2))
