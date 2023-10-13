import mysql.connector
import datetime
import tweepy

auth = tweepy.OAuthHandler('GrvfaG55V8dCKwS1NAcUJa7oo','0GHZZW1MkGMgnwK4PiyFIpFJfAkYDkP6BSJN8HEss6BmZb5wEF')
auth.set_access_token('1292179532632526849-ybp1LyO1ErTdcBgVNFi9SyngBgl7Lb','MPhZdUUwNruyaXdzymtJy2rDx8qczAj7bzFoP3avusbYE')
api = tweepy.API(auth)
try:
	api.verify_credentials()
	mydb = mysql.connector.connect(host='localhost',user='root',password='Gu@n@b@r@',database='literledge')
	conn = mydb.cursor()
	conn.execute("SELECT pt,nick,birth,country,gender FROM users")
	for i in conn:
		try:
			brth = datetime.datetime.strptime(i[2], '%Y-%m-%d')
			tdy = datetime.datetime.now()
			if brth.day == tdy.day and brth.month == tdy.month:
				age = int(tdy.year) - int(brth.year)
				img = '../media/images/profilepics/'+i[1]+'.jpg'
				if i[4] == {'M'}:
					message = i[0]+' faz '+str(age)+' anos hoje. Nascido em '+str(brth.year)+', '+i[3]+'.\nConheça mais sobre esse autor em: literledge.000webhostapp.com/@'+i[1]
				elif i[4] == {'F'}:
					message = i[0]+' faz '+str(age)+' anos hoje. Nascida em '+str(brth.year)+', '+i[3]+'.\nConheça mais sobre essa autora em: literledge.000webhostapp.com/@'+i[1]
				api.update_with_media(img,message)
		except: pass
except Exception as e:
	print(e)