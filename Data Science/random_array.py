#Set A 1.Generate a random array of 50 integers and display them using a line chart, scatter plot, histogram and box plot.
# Apply appropriate color, labels and styling options.
import pandas as pd
import numpy as np
from matplotlib.pyplot import *
n = np.random.randint(1, 100, 50)
x = np.arange(1, 51)
y = np.array(n)
title("Line Chart")
plot(x, y, color="m")
show()

title("scatter plot")
scatter(x, y, color="m")
show()

n1 = np.random.randint(1, 100, 50)
# x=np.arange(1,51)
x = np.array(n)
title("Histogram")
hist(x, color="y")
show()

title("Box Plot")
boxplot(n)
show()
