#Set A 2.Add two outliers to the above data and display the box plot.
import pandas as pd
import numpy as np
from matplotlib.pyplot import *
outliers = [100, 458, 500, 85, 555, 78, 123, 457, 852, 321, 114, 445, 635, 887, 999, 124, 456, 756, 856, 223, 456]
outliers.append(1600)
outliers.append(1)
b = [outliers]
boxplot(b)
title("Box Plot")
show()
