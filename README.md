
## Non Blocking Event Handler 
``` bash
#For Node
Run the app in two different tabs on one tab put some small number in the query parameter like "2", "10", "100"
Example http://localhost:8000/isprime?number=2
On the other tab put some big number like "29355126551"
Example http://localhost:8000/isprime?number=29355126551

On running bigger number node server will be completety be comsumed after that it won't take even samll number and process until the first process is complete
That is the reason we use child process or multiple clusters 
```

``` bash
#For Node
For PHP
Event are handle on apache level we don't have to setup anything extra
```

