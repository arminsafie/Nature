n = 12

sum = 0
count = 0

for i in range(1, n+1):
    if n % i == 0:
        if i % 4 == 0:
            print(i)
            sum += i
            count += 1

print("sum: " + str(sum))
print("count: " + str(count))