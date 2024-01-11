numberToGuess = 235
count = 0
minRange = 0
maxRange = 1000

while True:
    guess = (minRange + maxRange) // 2
    count += 1

    if guess == numberToGuess:
        print(f"I guessed your number ({numberToGuess}) in {count} attempts!")
        break
    elif guess < numberToGuess:
        minRange = guess + 1
    else:
        maxRange = guess - 1