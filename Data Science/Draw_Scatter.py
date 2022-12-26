# Set B 2.Write a Python program to draw scatter plots to compare two features of the iris dataset.
import pandas as pd
import matplotlib.pyplot as plt
from sklearn import preprocessing
iris = pd.read_csv("iris.csv")
iris = iris.drop('Id', axis=1)
le = preprocessing.LabelEncoder()
iris.Species = le.fit_transform(iris.Species)
x = iris.iloc[:, :-1].values
y = iris.iloc[:, 4].values
plt.scatter(x[:, 0], x[:, 3], c=y, cmap='flag')
plt.xlabel('Sepal Length cm')
plt.ylabel('Petal Width cm')
plt.show()
