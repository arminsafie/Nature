targetAmount = 50
coin1 = 20
coin2 = 10
coin3 = 5
count = 0

maxCoin1 = targetAmount // coin1
maxCoin2 = targetAmount // coin2
maxCoin3 = targetAmount // coin3

for i in range(maxCoin1 + 1):
    for j in range(maxCoin2 + 1):
        for k in range(maxCoin3 + 1):
            amount = (i * coin1) + (j * coin2) + (k * coin3)
            if amount == targetAmount:
                print(f"{i} x {coin1} cents + {j} x {coin2} cents + {k} x {coin3} cents = {targetAmount} cents")
                count += 1

print(count)