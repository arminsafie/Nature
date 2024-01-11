rem = 0
sum = 0
numberArray = []

def zorf(number):
    if number % 2 == 0:
        return 1
    else:
        return 0

for i in range(1000, 10000):
    num = i
    for j in range(4):
        rem = num % 10
        numberArray[j] = rem
        num = int(num / 10)

    r1 = zorf(numberArray[0]) + zorf(numberArray[2])
    r2 = zorf(numberArray[1]) + zorf(numberArray[3])

    if r1 == 2 and r2 == 0:
        print(i)