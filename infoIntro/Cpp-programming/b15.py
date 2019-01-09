#!/usr/bin/env python3

print("輸入一正整數，列出此數的所有正因數，並判斷此數字是否為質數")
n = int(input("請輸入一個數字:"))

print(n, "的因數有:", sep='', end='')
count = 0
for i in range(1, n):
    if n%i==0:
        count += 1
        print(i, end=' ')
count += 1
print(n)

if count==2:
    print(n, "為質數", sep='')
else:
    print(n, "不為質數", sep='')