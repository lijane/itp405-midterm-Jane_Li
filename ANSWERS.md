## Question 2
One potential problems with this method is the "N +1 Problem". This is when the user uses lazy loading, or populates an object with data, but only requests one piece at a time. The "N" stands for the number of queries that it would have to run (one per each item in the database) and the +1 is the first query asking for the data. If there are too many items in the database, the time it takes to load may add up and slow down the entire page. This problem is referred to as "Death by a thousand queries". 

One way to fix this problem is with hydration or eager loading. In eager loading, the user loads everything upfront, so it may be slow at first, but the overall time may be faster than asking for them later on demand.
