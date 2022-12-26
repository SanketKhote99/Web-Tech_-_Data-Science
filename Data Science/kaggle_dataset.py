'''Set B-1).Download the heights and weights dataset and load the dataset from a given csv file into a dataframe.
print the first, last 10 rows and random 20 rows.Print the first, last 10 rows and random 20 rows. 
(https.kaggle.com/burnoutminer/heights-and-weight-dataset)'''

import pandas as pd
df = pd.read_csv("SOCR-HeightWeight.csv")
print("First 10:")
print(df.head(10))

print("\n\n Last 10:")
print(df.tail(10))

print("\n\n Random 20:")
print(df.sample(20))
