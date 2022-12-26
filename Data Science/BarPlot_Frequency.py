# Set A 4.Write a Python program to create a Bar plot to get the frequency of the three species of the Iris data.
import pandas as pd
import seaborn as sns
from matplotlib.pyplot import *
df = pd.read_csv("iris.csv")
x = subplots(1, 1, figsize=(10, 6))
sns.countplot(data=df)
show()
