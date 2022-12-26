'''Set A-1).Import Dataset and do the followings:
a) Describing the dataset
b) Shape of the dataset
c) Display first 3 rows from dataset '''

import pandas as pd
df = pd.read_csv("country.csv")
print(df)
print("\n Describing the dataset ")
print(df.describe())
print("\nShape of the dataset")
print(df.shape)
print("\n Display first 3 rows from dataset ")
print(df.head(3))
