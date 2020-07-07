<h1 align="center">Calculator API</h1>
<p  align="center"> <b>Hostname</b> : http://calculatorapi546.atwebpages.com </p>

## Rest API

### Addition
url : http://calculatorapi546.atwebpages.com/public/api/add

Method: `POST`

Endpoint: `/add`

Body: 
```json
 {"num1":  20, "num2": 30}
```

### Subtraction
url :  : http://calculatorapi546.atwebpages.com/public/api/subtract

Method: `POST`

Endpoint: `/subtract`

Body: 
```json
 {"num1":  10, "num2": 4}
```

### Multiplication 

url : http://calculatorapi546.atwebpages.com/public/api/multiply

Method: `POST`

Endpoint: `/subtract`

Body: 
```json
 {"num1":  10, "num2": 4}
```
### Division
url : http://calculatorapi546.atwebpages.com/public/api/divide

Method: `POST`

Endpoint: `/divide`

Body: 
```json
 {"num1":  10, "num2": 4}
```
### Square Root
url : http://calculatorapi546.atwebpages.com/public/api/squareRoot

Method: `POST`

Endpoint: `/squareRoot`

Body: 
```json
 {"num1": 90}
```
### Save Value
url : http://calculatorapi546.atwebpages.com/public/api/save

Method: `POST`

Endpoint: `/save`

Body: 
```json
 {"value": 40}
```

### Retrieve Value
url : http://calculatorapi546.atwebpages.com/public/api/savedValue

Method: `GET`

Endpoint: `/savedValue`

### Clear Value
url : http://calculatorapi546.atwebpages.com/public/api/clear

Method: `POST`

Endpoint: `/clear`

## Test Cases

Package used : "phpunit/phpunit": "^8.5"

command used to case test case file : php artisan make:test CalculatorApiTest

Code path of test cases : \calculator_API\tests\Feature\CalculatorApiTest.php

command to execute the test cases : .\vendor\bin\phpunit.bat (once we run this command, all the tests will be executed automatically)

- <b>test_can_create_value  </b> : This method will execute /save endpoint passing value = 20 and checks response status 200  

- <b>test_can_add_task  </b> : This method will execute /add endpoint passing num1=20, num2 = 20 and checks response status 200  

- <b>test_can_subtract_task  </b> : This method will execute /subtract endpoint passing num1 = 20, num2 = 20 and checks response status 200  

- <b>test_can_multiply_task  </b> : This method will execute /multiply endpoint passing num1 = 20, num2 = 20 and checks response status 200  

- <b>test_can_divide_task </b> : This method will execute /divide endpoint passing num1 = 20, num2 = 20 and checks response status 200  

- <b>test_can_divide_task </b> : This method will execute /divide endpoint passing num1 = 61 and checks response status 200  

screenshot for successfully executed testcases :https://raw.githubusercontent.com/sivashanker546/calculator_API/master/public/success_testcase.PNG

screenshot for failure of test cases  https://raw.githubusercontent.com/sivashanker546/calculator_API/master/public/failure_testcase.PNG 

Inorder to execute the testcases in local, we need to follow below steps 
- git clone https://github.com/sivashanker546/calculator_API.git

- composer update 

- php artisan session:table 

- command to execute the test cases : .\vendor\bin\phpunit.bat

<b> note </b> : Since i have hosted in some free hosting server i have limited access to give access to testcases, so sending the screenshtos as above 


