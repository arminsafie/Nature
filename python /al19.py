num = 7034056
rem = 0
sum = 0
zoj = 0
fard = 0
sefr = 0
numberArray = []
var = len(str(num))

# This function determines if a number is even or odd
def zorf(number):
    if number % 2 == 0:
        return 1
    else:
        return 0

# This loop extracts the digits of the number
for i in range(var):
    rem = num % 10
    numberArray.append(rem)
    num = int(num / 10)

# This loop counts the number of even, odd, and zero digits
for j in range(len(numberArray)):
    if zorf(numberArray[j]) == 1:
        if numberArray[j] == 0:
            sefr += 1
        else:
            zoj += 1
    elif zorf(numberArray[j]) == 0:
        fard += 1

print("zoj: " + str(zoj))
print("fard: " + str(fard))
print("sefr: " + str(sefr))