#Write a Python program for Handling Missing Value. Replace missing value of salary, age column with mean of that column.(Use Data.csv file)

import pandas as pd
import numpy as np
 
df = pd.read_csv("/Users/ajitesh/Downloads/Placement_Data_Full_Class.csv")
 
df.head()