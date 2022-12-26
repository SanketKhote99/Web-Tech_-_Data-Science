#Binarizing Data using we use the Binarizer class (Using a binary threshold, it is possible to transform our data by marking the values above it 1 and those equal to or below it, 0
# Python code explaining how
# to Binarize feature values

""" PART 1
	Importing Libraries """

import numpy as np
import matplotlib.pyplot as plt
import pandas as pd

# Sklearn library
from sklearn import preprocessing

""" PART 2
	Importing Data """

data_set = pd.read_csv(
		'C:\\Users\\dell\\Desktop\\Data_for_Feature_Scaling.csv')
data_set.head()

# here Features - Age and Salary columns
# are taken using slicing
# to binarize values
age = data_set.iloc[:, 1].values
salary = data_set.iloc[:, 2].values
print ("\nOriginal age data values : \n", age)
print ("\nOriginal salary data values : \n", salary)

""" PART 4
	Binarizing values """

from sklearn.preprocessing import Binarizer

x = age
x = x.reshape(1, -1)
y = salary
y = y.reshape(1, -1)

# For age, let threshold be 35
# For salary, let threshold be 61000
binarizer_1 = Binarizer(35)
binarizer_2 = Binarizer(61000)

# Transformed feature
print ("\nBinarized age : \n", binarizer_1.fit_transform(x))

print ("\nBinarized salary : \n", binarizer_2.fit_transform(y))
