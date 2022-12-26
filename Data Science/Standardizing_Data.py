# Set B-3).Standardizing Data (transform them into a standard Gaussian distribution with a mean of 0 and a standard deviation of 1)

import pandas as pd
import numpy as np
from sklearn import preprocessing
import scipy.stats as s
df = pd.read_csv("winequality-red.csv")
print('Standarlizing Data')
x_train = df
print('Initial mean:', s.tmean(x_train).round(2))
print('Initial SD:', round(x_train.std(), 2))
x_scaled = preprocessing.scale(x_train)
x_scaled.mean(axis=0)
x_scaled.std(axis=0)
print('Standarizing Data:', x_scaled.round(2))
print('Standarizing mean:', s.tmean(x_scaled).round(2))
print('Standarizing SD:', round(x_scaled.std(), 2))
