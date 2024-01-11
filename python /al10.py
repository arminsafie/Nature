def checkPrime(num):
    if num == 1:
        return 0
    for i in range(2, num // 2 + 1):
        if num % i == 0:
            return 0
    return 1

for num in range(2, 1001):
    if checkPrime(num) == 1:
        print(num)