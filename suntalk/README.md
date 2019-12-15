# python

## python_1
有一個function叫做QQ
我們定義QQ(x)是將x每三個數字分割開來
並將其全部加在一起
EX:
QQ(12345) = 168 (123+45)
flag: `NISRA{QQ(9487!)}`

> Flag: `NISRA{5230764}`

## python_2
有一個function叫做QAQ
QAQ(s) 是將s轉化成數字的function
s為一字串,將其中小寫的字母個別轉為數字後相加
EX:
a = 1, b = 2, c = 3, ...
QAQ("aaa") = 3
QAQ("AAA") = 0
flag: `NISRA{QQ(QAQ(The Zen of Python)!)}`

> Flag: `NISRA{3996000}`