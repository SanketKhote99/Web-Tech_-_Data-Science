#Write a Python program to view basic statistical details of the data (Use Heights and Weights Dataset)
import pandas as pd
data = pd.read_csv("iris.csv")
print(data.describe())
