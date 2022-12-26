#Write a Python program to create a histogram of the three species of the Iris data.
import pandas as pd
import matplotlib.pyplot as plt
df = pd.read_excel('https://github.com/datagy/Intro-to-Python/raw/master/sportsdata.xls', usecols=['Age'])

print(df.describe())
