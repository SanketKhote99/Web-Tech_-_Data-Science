# Set A 6.Write a Python program to create a histogram of the three species of the Iris data
import pandas as pd
from matplotlib.pyplot import *
from sklearn.datasets import load_iris
iris = load_iris()
print(iris.data[iris.target == 1][:5])
print(iris.data[iris.target == 1, 0][:5])
fig, x = subplots()
x_index = 3
colors = ['m', 'y', 'r']
for lable, color in zip(range(len(iris.target_names)), colors):
    x.hist(iris.data[iris.target == lable, x_index],color=color)
    x.legend(loc='upper right')
    show()
