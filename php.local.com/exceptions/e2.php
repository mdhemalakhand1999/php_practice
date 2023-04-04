<?php
class MyException extends Exception {

}
class NetworkException extends Exception {

}

function testException() {
    throw new NetworkException;
}
//MyException
try {
    testException();
} catch(MyException $e) {
    echo "MyException Called";
} catch(NetworkException $e) {
    echo "NetworkException Called";
} catch(Exception $e) {
    echo "Exception Called";
} finally {
    echo "<br>Clean up";
}