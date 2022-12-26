#Dataset Name: winequality-red.csv	[15]
#Write a program in python to perform following task
#Rescaling: Normalised the dataset using MinMaxScaler class
#Binarizing Data using we use the Binarizer class (Using a binary threshold, it is possible to transform our data by marking the values above it 1 and those equal to or below it, 0
import pandas as pd
import numpy as np
 
arr = np.array([['M', 81.4, 82.2, 44, 6.1, 120000, 'no'],
               ['M', 75.2, 86.2, 40, 5.9, 80000, 'no'],
               ['F', 80.0, 83.2, 34, 5.4, 210000, 'yes'],
               ['F', 85.4, 72.2, 46, 5.6, 50000, 'yes'],
               ['M', 68.4, 87.2, 28, 5.11, 70000, 'no']])
#
# Create Pandas DataFrame
#
df = pd.DataFrame(arr)
df.columns = ['gender', 'hsc_p', 'ssc_p', 'age', 'height', 'salary', 'suffer_from_disease']
#
# Convert the string data type to int and float appropriately
#
df[['age', 'salary']] = df[['age', 'salary']].astype(int)
df[['ssc_p', 'hsc_p', 'height']] = df[['ssc_p', 'hsc_p', 'height']].astype(float)