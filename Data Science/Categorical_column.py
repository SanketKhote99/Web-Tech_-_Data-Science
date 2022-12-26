'''Set A-3). Data.csv have two categorical column (the country column, and the purchased column).
a. Apply OneHot coding on Country column.
b. Apply Label encoding on purchased column '''

import pandas as pd
from sklearn.preprocessing import *
import scipy.stats as s
df = pd.read_csv("country.csv")
enc = OneHotEncoder(handle_unknown='ignore')
enc = pd.DataFrame(enc.fit_transform(df[['Country']]).toarray())
df = df.join(enc)
print('Applying OneHotEncoding on Country')
print(df)
