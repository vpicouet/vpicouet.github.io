# -*- coding: utf-8 -*-
#!/usr/bin/python

############
#
#
#    Create DATA BASE for Ilios
#
#
#    V. Picouet
#
############


import sqlite3

conn = sqlite3.connect('liens.db')
conn.text_factory = str


cursor = conn.cursor()
cursor.execute("""
CREATE TABLE IF NOT EXISTS users(
     id INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
     lien TEXT
)
""")


lien1 = {"lien" : "https://www.youtube.com/watch?v=NZXJ7zh3PJM&list=WL&index=38"}



liens = [lien1]


for un_lien in liens:
	cursor.execute("""
	INSERT INTO users(lien) VALUES(:lien)""", un_lien)


cursor.execute("""SELECT id, lien FROM users""")
rows = cursor.fetchall()
for row in rows:
    print('{0} : {1} '.format(row[0], row[1]))


conn.commit()
conn.close()
