#Write a Python program to perform the following tasks :
#a.Apply OneHot coding on Country column.
#b.Apply Label encoding on purchased column
#(Data.csv have two categorical column the country column, and the purchased column)
#importing the libraries
import pandas as pd
import numpy as np

#reading the dataset
df=pd.read_csv("iris.csv")