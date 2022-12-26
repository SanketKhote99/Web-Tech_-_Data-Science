#Write a Python program to view basic statistical details of the data.(Use wineequality-red.csv)

import numpy as np
import pandas as pd
import matplotlib.pyplot as plt 
import seaborn as snsdata
data = pd.read_csv("../input/wineQualityReds.csv")
data.head()