First of all within session_start, there is no way to see what is already in the array :

session_start([array $options =[] ]);

It is counting once it appears in the loop. It then counts up from 1 and echos "I have seen you [] amount of times." However, this would need to be specified at the beginning. 
Would have to declare variables to know where to start and stop.
