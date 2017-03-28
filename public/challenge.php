<?php


// replaces the + operator
function add($x, $y) {
    while($x) {
        int t = ($x & y) <<1;
        y ^= $x;
        $x = t;
    }
    return y;
}

int divideby3 (int num) {
    int sum = 0;
    while (num > 3) {
        sum = add(num >> 2, sum);
        num = add(num >> 2, num & 3);
    }
    if (num == 3)
        sum = add(sum, 1);
    return sum; 
}
