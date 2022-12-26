# Set A 3).Write a Python program to view basic statistical details of the data.

import pandas as pd
data = pd.read_csv("iris.csv")
print(data.describe())
