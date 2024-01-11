date = 50

if date <= 30:
    print("1/" + str(date))
elif date <= 60:
    day = date - 30
    print("2/" + str(day))
elif date <= 90:
    day = date - 60
    print("3/" + str(day))
elif date <= 120:
    day = date - 90
    print("4/" + str(day))
elif date <= 150:
    day = date - 120
    print("5/" + str(day))
elif date <= 180:
    day = date - 150
    print("6/" + str(day))
elif date <= 240:
    day = date - 180
    print("7/" + str(day))
elif date <= 270:
    day = date - 240
    print("8/" + str(day))
elif date <= 300:
    day = date - 270
    print("9/" + str(day))
elif date <= 330:
    day = date - 300
    print("10/" + str(day))
elif date <= 360:
    day = date - 330
    print("11/" + str(day))
elif date <= 370:
    day = date - 360
    print("12/" + str(day))
else:
    print('error invalid value')