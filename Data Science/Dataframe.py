# 1 Write a Python program to create a dataframe containing columns name, age and percentage.
# Add 10 rows to the dataframe. View the dataframe.

import pandas as pd
# Create an empty data frame with column names
df = pd.DataFrame(columns=['Name', 'Age', 'Percentage'])
# Add records
df.loc[0] = ['Rhutik', '21', 87]
df.loc[1] = ['Sagar', '19', 69]
df.loc[2] = ['Sahil', '21', 76]
df.loc[3] = ['Gaurav', '20', 92]
df.loc[4] = ['Sayali', '21', 85]
df.loc[5] = ['Rutuja', '20', 93]
df.loc[6] = ['Supriya', '23', 62]
df.loc[7] = ['Sonali', '16', 50]
df.loc[8] = ['Sarthak', '19', 52]
df.loc[9] = ['Sakshi', '21', 98]

# Print the dataframe
print(df)
