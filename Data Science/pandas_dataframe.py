'''Set B-3). Display column-wise mean, and median for iris dataset from Q.4 (Hint: Use mean() and median() 
functions of pandas dataframe '''

import pandas as pd
df = pd.read_csv("iris.csv")
print(df.sample(10))
df.mean()
