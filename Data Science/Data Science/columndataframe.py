#Write a Python program to create a data frame containing columns name, age , salary, department . Add 10 rows to the data frame. View the data frame
import pandas as pd  
  

# assign data of lists.  
  
# Create DataFrame  
df = pd.DataFrame({'Name': ['Tom', 'Joseph', 'Krish', 'John'], 'Age': [20, 21, 19, 18],'Salary':[2000,3000,4000,5000]})  
  

# Print the output.  
print(df)  