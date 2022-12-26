# Set A-7). Write a Python program to generate a line plot of name vs percentage

import matplotlib.pyplot as plt
Name = ['Rhutik', 'Sahil', 'Rutuja', 'Sayali', 'Sakshi']
Percentage = [50, 56, 60, 85, 90]
plt.plot(Name, Percentage, color='Blue')
plt.xlabel('Name')
plt.ylabel('Percentage')
plt.title('Names of students with percentage')
plt.show()
