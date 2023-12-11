 <?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
function printPrimes($limit) {
    for ($i = 2; $i < $limit; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}
// Replace 100 with your desired limit
$limit = 100;
echo "Prime numbers less than .$limit. are: ";
printPrimes($limit);
?>