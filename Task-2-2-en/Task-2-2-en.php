<?php
    // Display a prompt
    print("Enter radar station data (0 to end input).\r\n"); 
    // Read the first two elements
    $prev = intval(fgets(STDIN)); // input first height
    $curr = intval(fgets(STDIN)); // input second height
    $peaks_count = 0; // peak counter
    $b_done = false; // loop termination flag
    while (!$b_done)
    {
        $next_val = intval(fgets(STDIN)); // input third height
        // If 0 is encountered, input is finished
        $b_done = ($next_val == 0); // loop termination condition
        // Check the peak condition for the current element
        if (!$b_done && ($curr > $prev) && ($curr > $next_val))
        {
            $peaks_count += 1; // increment peak counter
        }
        // Shift the three-element "window" forward
        $prev = $curr; 
        $curr = $next_val; 
    }
    print("Number of peaks: " . $peaks_count . "\r\n"); // display result
?>