# Set A-5).Write a Python program to get the number of observations, missing values and duplicate values.

import pandas as pd
# Create an empty data frame with column names
df = pd.DataFrame(columns=['Name', 'Age', 'Percentage'])
# Add records
df.loc[0] = ['Rhutik', '20', 87]
df.loc[1] = ['Sagar', '19', 69]
df.loc[2] = ['Sahil', '18', 76]
df.loc[3] = ['Gaurav', '20', 92]
df.loc[4] = ['Sayali', '21', 85]
df.loc[5] = ['Rutuja', '22', 93]
df.loc[6] = ['Supriya', '25', 62]
df.loc[7] = ['Sonali', '17', 50]
df.loc[8] = ['Sarthak', '16', 52]
df.loc[9] = ['Sakshi', '23', 98]
print(df.info())
