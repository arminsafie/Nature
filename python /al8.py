mabnaTabdiy = 3
num = 3022
rem = 0
sum = 0
numberArray = []

var = len(str(num))

for i in range(var):
    rem = num % 10
    numberArray.append(rem)
    num = num // 10

for j in range(len(numberArray)):
    r = numberArray[j] * pow(mabnaTabdiy, j)
    sum += r

print(sum)