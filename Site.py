#!/usr/bin/env python2
# -*- coding: utf-8 -*-
"""
Created on Thu Jan  4 11:21:21 2018

@author: FIREBall
"""

from __future__ import unicode_literals
import csv
import codecs
import sys
import fileinput
import threading
import time
import glob
import datetime
date = datetime.datetime.now()
citations =[]
defis=[]
mots = []
textes = []
with open('Citations1.csv', 'rb') as csvfile:
     spamreader = csv.reader(csvfile, delimiter='-', quotechar='|')
     for row in spamreader:
         citations.append(row)

with open('Defis1.csv', 'rb') as csvfile:
     spamreader = csv.reader(csvfile, delimiter='-', quotechar='|')
     for row in spamreader:
         defis.append(row)
         
with open('Mots1.csv', 'rb') as csvfile:
     spamreader = csv.reader(csvfile, delimiter='-', quotechar='|')
     for row in spamreader:
         mots.append(row)
citations        
         

         
bgs = glob.glob('images/bg/*.jpg')

def changeCit(cit=0,citations = citations):
    rand = np.random.randint(5)#np.random.randint(1)
    print rand,citations[rand][0]
    for i, line in enumerate(fileinput.input('index.html', inplace=1)):
        sys.stdout.write(line.replace(citations[cit][0], citations[rand][0]))
        sys.stdout.write(line.replace(citations[cit][1], citations[rand][1])) 


def changeCitV1(cit=0,day = 0,file = 'indexCit.html', citations = citations):
    thing,number = findDayThing()
    date = datetime.datetime.now()
    
    if thing==0:
        rand = date.minute%len(citations)
        for i, line in enumerate(fileinput.input(file, inplace=1)):
            sys.stdout.write(line.replace('<h4>'+mots[number][0]+'<br/></h4><h2>'+mots[number][1]+'</h2><h3>' + mots[number][2] + '</h3>', '<h1>'+citations[rand][0]+'<br/></h1><h5><div align="right">'+citations[rand][1]+'</div></h5>')) 
        print rand,citations[rand][0]
    if thing==1:
        rand = date.minute%len(defis)
        for i, line in enumerate(fileinput.input(file, inplace=1)):
            sys.stdout.write(line.replace('<h1>'+citations[number][0]+'<br/></h1><h5><div align="right">'+citations[number][1]+'</div></h5>', '<h1>'+defis[rand][0]+'<br/></h1><h5><div align="right">'+defis[rand][1]+'</div></h5>')) 
        print rand,defis[rand][0]
    if thing==2:
        rand = date.minute%len(mots)
        for i, line in enumerate(fileinput.input(file, inplace=1)):
            sys.stdout.write(line.replace('<h1>'+defis[number][0]+'<br/></h1><h5><div align="right">'+defis[number][1]+'</div></h5>', '<h4>'+mots[number][0]+'<br/></h4><h2>'+mots[cit][1]+'</h2><h3>' + mots[cit][2] + '</h3>'))                
        print rand,mots[rand][0]
#    if date.minute%3==0:
#        for i, line in enumerate(fileinput.input('index.html', inplace=1)):
#            sys.stdout.write(line.replace('<h4>'+mots[cit][0]+'<br/></h4><h2>'+mots[cit][1]+'</h2><h3>' + mots[cit][2] + '</h3>', '<h4>'+mots[cit][0]+'<br/></h4><h2>'+mots[cit][1]+'</h2><h3>' + mots[cit][2] + '</h3>')) 
#    if date.minute%3==1:
#        for i, line in enumerate(fileinput.input('index.html', inplace=1)):
#            sys.stdout.write(line.replace('<h1>'+citations[cit][0]+'<br/></h1><h5>  <div align="right">'+citations[cit][1]+'</div></h5>', '<h1>'+citations[rand][0]+'<br/></h1><h5>  <div align="right">'+citations[rand][1]+'</div></h5>')) 
#    if date.minute%3==2:
#        for i, line in enumerate(fileinput.input('index.html', inplace=1)):
#            sys.stdout.write(line.replace('<h1>'+defis[cit][0]+'<br/></h1><h5>  <div align="right">'+defis[cit][1]+'</div></h5>', '<h1>'+defis[rand][0]+'<br/></h1><h5>  <div align="right">'+defis[rand][1]+'</div></h5>')) 
##    fileinput.close()   
    return rand

def findDayThing(file = 'indexCit.html',nline=27,things=[mots,citations,defis]):
    html_file = []
    with open(file) as openfile:
        for line in openfile:
    #        print line
            html_file.append(line)
    for j in range(len(things)):
        for i in range(len(things)):
            if things[j][i][0] in html_file[nline]:
                print 'We found the thing: ',j,i
    return j, i
        
        
thing, number = findDayThing()     
#citations et defis ont le meme template:
#<h1>Jaime trop lamour pour aimer les femmes<br/></h1><h5>  <div align="right">Jacques Brel</div></h5>
#<h4>Petulence<br/></h4><h2> Energie debridee, brusque et chaotique</h2><h3>Exemple: La pétulence de Théo est remarquable</h3>




def changeBg(cit=0,citations = bgs):
    rand = np.random.randint(5)#np.random.randint(1)
    print rand,citations[rand][0]
    for i, line in enumerate(fileinput.input('assets/css/main.css', inplace=1)):
        sys.stdout.write(line.replace(bgs[cit],bgs[rand]))        
#    for i, line in enumerate(fileinput.input('indexV1.html', inplace=1)):
#        sys.stdout.write(line.replace(citations[cit][1], citations[rand][1]))
#    fileinput.close()
    return rand

         
#f=codecs.open("indexV1.html", 'r')
#print f.read()



html_file = []
css_file = []

with open("index.html") as openfile:
    for line in openfile:
#        print line
        html_file.append(line)

with open("assets/css/main.css") as openfile:
    for line in openfile:
#        print line
        css_file.append(line)

for i in range(len(citations)):
    if citations[i][0] in html_file[27]:
        print i
        cit = i
 
for i in range(len(bgs)):
    if bgs[i] in css_file[1105]:
        print i
        bg = i
       
for i in range(100):
    cit = changeCitV1(cit=cit,citations = citations)
    bg = changeBg(cit=bg,citations = bgs)

#    new = changeAuteur(cit=new,citations = citations)
    time.sleep(2)#10 secondes    

#def printit():
##    threading.Timer(10.0, printit).start()
#    print "Hello, World!"
#    new = changeCit(cit=0,citations = citations)
#    return 




with open("mots1.csv") as openfile:
    for line in openfile:
#        print line
        print line
        html_file.append(line)
