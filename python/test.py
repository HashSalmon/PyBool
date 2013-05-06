

import random
from subprocess import *
import shutil

import sys

random.seed()

status = random.randint(0,4)
uniqid = sys.argv[1]

if status in [0,1,2]:
    f = open("python\output" + uniqid + ".txt", "w")
    f.write("This is program output\n")
    f.close()
else:
    f = open("python\error" + uniqid +".txt", "w")
    f.write("This is an error\n")
    f.close()
    