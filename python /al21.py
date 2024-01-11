rem = 0
sum = 0
numberArray = []

def zorf(number):
    if number % 2 == 0:
        return 1
    else:
        return 0

for i in range(10, 100):
    num = i
    for j in range(4):
        rem = num % 10
        numberArray[j] = rem
        num = int(num / 10)

    r = zorf(numberArray[0]) + zorf(numberArray[1])

    if r == 0:
        print(i)