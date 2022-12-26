# Set B 1.Write a Python program to create a graph to find relationship between the petal length and petal width.
import pandas as pd
import matplotlib.pyplot as plt
iris = pd.read_csv("iris.csv")
iris[iris.Species == 'Iris-setosa'].plot.scatter(
    x='PetalLengthCm', y='PetalWidthCm', color='orange')
iris[iris.Species == 'Iris-versicolor'].plot.scatter(
    x='PetalLengthCm', y='PetalWidthCm', color='blue')
iris[iris.Species == 'Iris-virginica'].plot.scatter(
    x='PetalLengthCm', y='PetalWidthCm', color='green')
fig = plt.gcf()
plt.show()
