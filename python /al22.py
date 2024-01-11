rem = 0
sum = 0
numberArray = []

def zorf(number):
    if number % 2 == 0:
        return 1
    else:
        return 0

for i in range(100, 991):
    num = i
    for j in range(3):
        rem = num % 10
        numberArray[j] = rem
        num = int(num / 10)

    r = zorf(numberArray == 1)

    if numberArray[0] == numberArray[2] and zorf(numberArray[1]) == 1:
        print(i)