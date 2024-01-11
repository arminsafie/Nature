num = 12

sum = 0
rem = 0
realNumber = num

while num != 0:
    rem = num % 10
    sum += rem
    num = num // 10

if realNumber % sum == 0:
    print("hast")
else:
    print("nist")