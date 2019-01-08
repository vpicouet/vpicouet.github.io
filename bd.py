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

conn = sqlite3.connect('citations.db')
conn.text_factory = str


cursor = conn.cursor()
cursor.execute("""
CREATE TABLE IF NOT EXISTS users(
     id INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
     name TEXT,
     citation TEXT
)
""")


citation1 = {"name" : "Jacques Brel", "citation" : "'J'aime trop l'amour pour aimer les femmes'"}
citation2 = {"name" : "Woody Allen", "citation" : "'L'éternité c'est long, surtout vers la fin'"}
citation3 = {"name" : "Nietzsche", "citation" : "'Tu dois devenir l homme que tu es. Fais ce que toi seul peux faire. Deviens sans cesse celui que tu es, sois le maître et le sculpteur de toi-même.'"}
citation4 = {"name" : "Platon", "citation" : "'Nul n’est mechant volontairement'"}
citation5 = {"name" : "Aristote", "citation" : "'Le bonheur est une fin en soi'"}
citation6 = {"name" : "Gandhi", "citation" : "'La vie est un mystère qu il faut vivre, et non un problème à resoudre.'"}
citation7 = {"name" : "Hegel", "citation" : "'Rien de grand ne s’est fait dans le monde sans passion'"}
citation8 = {"name" : "Blaise Pascal", "citation" : "'Le coeur a ses raisons que la raison ignore'"}
citation9 = {"name" : "Leibniz", "citation" : "'Pourquoi y a t il quelque chose plutôt que rien?'"}
citation10 = {"name" : "Montesquieu", "citation" : "'La liberte est le droit de faire tout ce que les lois permettent'"}



citation11 = {"name" : "Epictète", "citation" : "'N’attends pas que les évènements arrivent comme tu le souhaites ; decide de vouloir ce qui arrive et tu seras heureux'"}
citation12 = {"name" : "Simone De Beauvoir", "citation" : "'On ne naît pas femme, on le devient'"}
citation13 = {"name" : "Fichte", "citation" : "'L’homme (ainsi que tous les êtres finis en general) ne devient homme que parmi les hommes'"}
citation14 = {"name" : "Alain", "citation" : "'l’effort qu’on fait pour être heureux n’est jamais perdu'"}
citation15 = {"name" : "Gandhi", "citation" : "'La règle d or de la conduite est la tolerance mutuelle, car nous ne penserons jamais tous de la même façon, nous ne verrons qu une partie de la verite et sous des angles differents.'"}
citation16 = {"name" : "Confucius", "citation" : "'Choisissez un travail que vous aimez et vous n aurez pas a travailler un seul jour de votre vie.'"}
citation17 = {"name" : "Confucius", "citation" : "'La nature fait les hommes semblables, la vie les rend differents.'"}
citation18 = {"name" : "Bertrand Russell", "citation" : "'L'ennui dans ce monde, c est que les idiots sont sûrs d eux et les gens senses pleins de doutes.'"}
citation19 = {"name" : "Paul Valery", "citation" : "'L'éducation ne se borne pas a l enfance et a l adolescence. L enseignement ne se limite pas a l ecole. Toute la vie, notre milieu est notre education, et un educateur a la fois sevère et dangereux.'"}
citation20 = {"name" : "Gandhi", "citation" : "'La victoire obtenue par la violence equivaut a une defaite, car elle est momentanee.'"}

citation21 = {"name" : "Confucius", "citation" : "'Si tu rencontres un homme de valeur, cherche a lui ressembler. Si tu rencontres un homme mediocre, cherche ses defauts en toi-même.'"}
citation22 = {"name" : "Aime Jacquet", "citation" : "'Le sport est depassement de soi. Le sport est ecole de vie.'"}
citation23 = {"name" : "Pierre de Coubertin", "citation" : "'Le sport va chercher la peur pour la dominer, la fatigue pour en triompher, la difficulte pour la vaincre.'"}
citation24 = {"name" : "Ernest Hemingway", "citation" : "'For sale: baby shoes, never worn.'"}




citations = [citation1,citation2,citation3,citation4,citation5,citation6,citation7,citation8,citation9,citation10,
citation11,citation12,citation13,citation14,citation15,citation16,citation17,citation18,citation19,citation20,
citation21,citation22,citation23,citation24]


for une_citation in citations:
	cursor.execute("""
	INSERT INTO users(name, citation) VALUES(:name, :citation)""", une_citation)


cursor.execute("""SELECT id, name, citation FROM users""")
rows = cursor.fetchall()
for row in rows:
    print('{0} : {1} - {2}'.format(row[0], row[1], row[2]))


conn.commit()
conn.close()
