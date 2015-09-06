## CountNonDivisible

### The Problem

You are given a non-empty zero-indexed array A consisting of N integers.

For each number A[i] such that 0 ≤ i < N, we want to count the number of elements of the array that are not the divisors of A[i]. We say that these elements are non-divisors.

For example, consider integer N = 5 and array A such that:
```php
    A[0] = 3
    A[1] = 1
    A[2] = 2
    A[3] = 3
    A[4] = 6
```
For the following elements:

* A[0] = 3, the non-divisors are: 2, 6,
* A[1] = 1, the non-divisors are: 3, 2, 3, 6,
* A[2] = 2, the non-divisors are: 3, 3, 6,
* A[3] = 3, the non-divisors are: 2, 6,
* A[6] = 6, there aren't any non-divisors.

Write a function:
```php
function solution($A);
```
that, given a non-empty zero-indexed array A consisting of N integers, returns a sequence of integers representing the amount of non-divisors.

The sequence should be returned as:

* a structure Results (in C), or
* a vector of integers (in C++), or
* a record Results (in Pascal), or
* an array of integers (in any other programming language).

For example, given:
```php
    A[0] = 3
    A[1] = 1
    A[2] = 2
    A[3] = 3
    A[4] = 6
```
the function should return [2, 4, 3, 2, 0], as explained above.

##### Assume that:
* N is an integer within the range [1..50,000];
* each element of array A is an integer within the range [1..2 * N].

##### Complexity:
* expected worst-case time complexity is O(N*log(N));
* expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.

### Solution Analysis on Codility
> Note: Took help from http://codility-lessons.blogspot.com/2015/03/lesson-9-countnondivisible.html

* Correctness: 100%
* Performance: 100%
* Task score: 100%
* Detected time complexity: __O(N * log(N))__

https://codility.com/demo/results/demoQNWUNB-DWG/