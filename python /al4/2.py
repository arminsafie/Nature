sum = 0
N = 30
x = 1
for power in range(N + 1):
    sum += x ** power
    x += 1

print(sum)