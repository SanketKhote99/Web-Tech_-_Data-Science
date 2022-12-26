# Set A 5.Write a Python program to create a Pie plot to get the frequency of the three species of the Iris data.
import pandas as pd
import matplotlib.pyplot as plt
iris = pd.read_csv("iris.csv")
ax = plt.subplots(1, 1, figsize=(10, 8))
iris['Species'].value_counts().plot.pie(explode=[0.1, 0.1, 0.1],autopct='%1.1f%%', shadow=True, figsize=(10, 8))
plt.title("Iris Species %")
plt.show()
