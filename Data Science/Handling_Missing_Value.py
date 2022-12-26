# Set A-2).Handling Missing Value: a) Replace missing value of salary,age column with mean of that column.

import pandas as pd
df = pd.read_csv("country.csv")
print(df)
df['Salary'] = df['Salary'].fillna(df['Salary'].mode()[0])
df['Age'] = df['Age'].fillna(df['Age'].mode()[0])
Print(df)
