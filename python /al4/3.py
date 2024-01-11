def factorial(n):
    if n == 0:
        return 1
    else:
        return n * factorial(n - 1)

x = 2
sum = 0
n = 12

max_val = 2 * n - 1

for j in range(3, max_val + 1, 2):
    sum += x ** j / factorial(j)

result = x - sum
print(result)