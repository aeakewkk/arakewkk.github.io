<html>
    <head>
        <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
        <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
        <title>Page 1</title>
        <py-env>
            - numpy
            - matplotlib
      </py-env>
    </head>
    <head><title>Page 1</title></head>
    <style>
        p{
            color:red;
            font-size: 50;
        }
    </style>
<py-script> 

import datetime
    
x = datetime.datetime.now()
    
</py-script>

    <body>
        <center><h1>SHOW TIME <py-script> print(x)</py-script></h1>
        <p>Hello!!!!!!!!!!!!!!!!!</p>
    <h1>Plotting a histogram of Standard Normal distribution</h1>
    <div id="plot"></div></center>
    <py-script output="plot">
import matplotlib.pyplot as plt
import numpy as np

np.random.seed(42)

rv = np.random.standard_normal(1000)

fig, ax = plt.subplots()
ax.hist(rv, bins=30)
fig

    </py-script>
    </body>
</html>

