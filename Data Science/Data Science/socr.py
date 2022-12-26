#Write a python program to Display column-wise mean, and median for SOCR- HeightWeight dataset.
numb = [2, 3, 5, 7, 8]
no = len(numb)
summ = sum(numb)
mean = summ / no
print("The mean or average of all these numbers (", numb, ") is", str(mean))
numb = [2, 4, 5, 8, 9]
no = len(numb)
numb.sort()
if no % 2 == 0:
    median1 = numb[no//2]
    median2 = numb[no//2 - 1]
    median = (median1 + median2)/2
else:
    median = numb[no//2]
print("The median of the given numbers  (", numb, ") is", str(median))