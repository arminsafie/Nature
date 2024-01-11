sum = 0
n = 27
for i in range(3, n):
    if i % 3 == 0:
        sum += 1 / i

print(sum)