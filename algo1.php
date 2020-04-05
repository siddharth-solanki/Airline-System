<?php
    // input misspelled word
    $input = 'hw r u my dear angel';

    // array of words to check against
    $words  = array('apple','pineapple','banana','orange','how are you',
                    'radish','carrot','pea','bean','potato','hw are you');


    // no shortest distance found, yet
    $shortest = -1;

    $closest = closest($input,$words,$shortest);


    echo "Input word: $input<br/>";
    if ($shortest == 0) {
        echo "Exact match found: $closest\n";
    } else {
        echo "Did you mean: $closest?\n";
    }
    echo '<br/><br/>';

    $shortest = -1;
    $words  = array('apple','pineapple','banana','orange','how are you',
                    'radish','carrot','pea','bean','potato');
    $closest = closest($input,$words,$shortest);
    echo "Input word: $input<br/>";
    if ($shortest == 0) {
        echo "Exact match found: $closest\n";
    } else {
        echo "Did you mean: $closest?\n";
    }

    echo '<br/><br/>';
    echo 'Similar text';
    echo '<br/>how are you:'.similar_text($input,'how are you');
    echo '<br/>orange:'.similar_text($input,'orange');
    echo '<br/>hw are you:'.similar_text($input,'hw are you');



    function closest($input,$words,&$shortest){
        // loop through words to find the closest
    foreach ($words as $word) {

        // calculate the distance between the input word,
        // and the current word
        $lev = levenshtein($input, $word);

        // check for an exact match
        if ($lev == 0) {

            // closest word is this one (exact match)
            $closest = $word;
            $shortest = 0;

            // break out of the loop; we've found an exact match
            break;
        }

        // if this distance is less than the next found shortest
        // distance, OR if a next shortest word has not yet been found
        if ($lev <= $shortest || $shortest < 0) {
            // set the closest match, and shortest distance
            $closest  = $word;
            $shortest = $lev;
        }


    }
    return $closest;
    }
    ?>