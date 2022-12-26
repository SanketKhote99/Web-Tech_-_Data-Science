'''Set A-2).Write a Python program to print the shape, number of rows-columns,data types,
feature names and the description of the data'''

import pandas as pd
data = pd.read_csv("iris.csv")
print("Shape of the data:")
print(data.shape)
print("\nData Type:")
print(type(data))
print("\nrows:")
print(data.head())
