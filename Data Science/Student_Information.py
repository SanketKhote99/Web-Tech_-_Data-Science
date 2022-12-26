'''Set A-6).Create a dataframe for students’ information such name, graduation percentage and age.
Display average age of students, average of graduation percentage. And, also describe all basic statistics of data. 
(Hint: use describe()).'''

import pandas as pd
df = pd.DataFrame(columns=['Name', 'Age', 'Percentage'])
df.loc[0] = ['Rhutikl', '20', 87]
df.loc[1] = ['Pranjal', '19', 69]
df.loc[2] = ['Sakshi', '18', 76]
df.loc[3] = ['Gaurav', '20', 92]
df.loc[4] = ['Sayali', '21', 85]
print(df.describe())
