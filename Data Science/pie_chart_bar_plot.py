# Set A 3.Create two lists, one representing subject names and the other representing marks obtained in those subjects.
# Display the data in a pie chart and bar chart.
# Import libraries
from matplotlib import pyplot as plt
import numpy as np
sub = ['OS', 'WT', 'DS', 'TCS', 'PYTHON']

data = [23, 43, 75, 58, 92]

# Creating plot
fig = plt.figure(figsize=(10, 7))
plt.pie(data, labels=sub)

# show plot
plt.show()
