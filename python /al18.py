m1 = {
    "x1": 6,
    "y1": 0,
}

m2 = {
    "x2": 7,
    "y2": 2,
}

sa1 = m1["y1"] - m2["y2"]
sa2 = m1["x1"] - m2["x2"]
a = sa1 / sa2

b = m1["y1"] + a * m1["x1"]

print("y = " + str(a) + "x + " + str(b))