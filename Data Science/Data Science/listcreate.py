#Create two lists, one representing subject names and the other representing marks obtained in those subjects. Display the data in a pie chart.
# Import libraries
from matplotlib import pyplot as plt
import numpy as np
 
 
# Creating dataset
cars = ['Maths', 'HTML', 'CSS',
        'JAVA', 'PYTHON', 'C LANG']
 
data = [23, 17, 35, 29, 12, 41]
 
# Creating plot
fig = plt.figure(figsize =(10, 7))
plt.pie(data, labels = cars)
 
# show plot
plt.show()